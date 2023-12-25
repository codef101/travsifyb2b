<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserOauthModel;
use App\Models\PaymentModel;
use App\Models\SettingsModel;

class Pay extends BaseController
{
    private $user_model;
    private $oauth_model;
    private $settings_model;
    private $payment_model;

    function __construct()
    {
        $this->user_model = new UserModel();
        $this->oauth_model = new UserOauthModel();
        $this->settings_model = new SettingsModel();
        $this->payment_model = new PaymentModel();
    }

    public function index()
    {
        return redirect()->to('/balance');
    }

    public function stripe()
    {
        $session = session();
        $id_user = $session->get('id_user');
        $data['obj'] = $this->user_model->where('id_user',$id_user)->first();
        $settings = $this->settings_model->first()??[];
        \Stripe\Stripe::setApiKey($settings['stripe_sk']);
        \Stripe\Charge::create ([
                "amount" => $this->request->getVar('amount'),
                "currency" => "usd",
                "source" => $this->request->getVar('stripeToken'),
                "description" => "Top Up balance on Travsify API"
        ]);
        $this->user_model->save([
            'id_user' => $id_user,
            'balance' => $data['obj']['balance']+$this->request->getVar('amount'),
        ]);
        $this->payment_model->save([
            'user_id' => $id_user,
            'type' => 'credit',
            'currency' => 'USD',
            'price' => $this->request->getVar('amount'),
            'balance' => $data['obj']['balance']+$this->request->getVar('amount'),
            'description' => 'Top-up balance via Stripe',
            'ref_no' => $this->request->getVar('stripeToken')
        ]);
         $session->setFlashdata('sweet', ['success','Payment Added sucessfully']);
        return redirect()->back();
  
    }
    
    public function success($ref)
    {
        $session = session();
        $settings = $this->settings_model->first()??[];
        $client = new \GuzzleHttp\Client();
        
        $response = $client->request('GET', 'https://sandboxapi.fincra.com/checkout/payments/merchant-reference/'.$ref, [
          'headers' => [
            'accept' => 'application/json',
            'api-key' => $settings['fincra_sk'],
          ],
        ]);
        
        echo $response->getBody();
        $session->setFlashdata('sweet', ['success','Payment Added sucessfully!']);
        return redirect()->back();
  
    }
    
    public function failed()
    {
        $session->setFlashdata('sweet', ['error','Payment was Uncompleted!']);
        return redirect()->to('/balance');
  
    }
    
    public function now($method)
    {
        $session = session();
        $id_user = $session->get('id_user');
        if(!empty($session->get('token'))){
            $data['obj'] = $this->user_model->where('id_user',$id_user)->first();
            if($data['obj']['country'] == "NG"){
                if($method == "trav"){
                    $settings = $this->settings_model->first()??[];
                    $data2['fincra'] = [
                        'key' => $settings['fincra_pk'],
                        'email' => $data['obj']['email'],
                        'name' => $data['obj']['first_name']." ".$data['obj']['last_name'],
                        'invoice_url' => "/pay/failed",
                        'balance_url' => "/pay/success"
                    ];
                    $data2['title'] = [
                        'module' => 'Payment',
                        'page'   => 'Via Travsify Checkout',
                        'icon'  => 'fas fa-money-bill'
                    ];
             
                    $data2['breadcrumb'] = [
                        ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
                        ['title' => 'Balance', 'route' => "/balance", 'active' => false],
                        ['title' => 'Top-Up via Travsify', 'route'  => "", 'active' => true]
                    ];
             
                    echo view(getenv('theme.backend.path').'main/header');
                    echo view(getenv('theme.backend.path').'form/pay/fincra',$data2);
                    echo view(getenv('theme.backend.path').'main/footer');
                }else if($method == "bank"){
                    $settings = $this->settings_model->first()??[];
                    $data2['title'] = [
                        'module' => 'Payment',
                        'page'   => 'Via Local Bank',
                        'icon'  => 'fas fa-money-bill'
                    ];
                    
                    $data2['admin'] = [
                        'email' => $settings['email_address']
                    ];
             
                    $data2['breadcrumb'] = [
                        ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
                        ['title' => 'Balance', 'route' => "/balance", 'active' => false],
                        ['title' => 'Top-Up via Local Bank', 'route'  => "", 'active' => true]
                    ];
             
                    echo view(getenv('theme.backend.path').'main/header');
                    echo view(getenv('theme.backend.path').'form/pay/bank',$data2);
                    echo view(getenv('theme.backend.path').'main/footer');
                }else{
                    $session->setFlashdata('sweet', ['error','This payment method is not allowed in your country!']);
                    return redirect()->to('/profile');
                }
            }else{
                if($method == "stripe"){
                    $settings = $this->settings_model->first()??[];
                    $data2['stripe'] = [
                        'key' => $settings['stripe_pk']
                    ];
                    $data2['title'] = [
                        'module' => 'Payment',
                        'page'   => 'Via Stripe',
                        'icon'  => 'fas fa-money-bill'
                    ];
             
                    $data2['breadcrumb'] = [
                        ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
                        ['title' => 'Balance', 'route' => "/balance", 'active' => false],
                        ['title' => 'Top-Up via Stripe', 'route'  => "", 'active' => true]
                    ];
             
                    echo view(getenv('theme.backend.path').'main/header');
                    echo view(getenv('theme.backend.path').'form/pay/stripe',$data2);
                    echo view(getenv('theme.backend.path').'main/footer');
                }else if($method == "fbank"){
                    $settings = $this->settings_model->first()??[];
                    $data2['title'] = [
                        'module' => 'Payment',
                        'page'   => 'Via Bank',
                        'icon'  => 'fas fa-money-bill'
                    ];
             
                    $data2['breadcrumb'] = [
                        ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
                        ['title' => 'Balance', 'route' => "/balance", 'active' => false],
                        ['title' => 'Top-Up via Bank', 'route'  => "", 'active' => true]
                    ];
                    
                    $data2['admin'] = [
                        'email' => $settings['email_address']
                    ];
             
                    echo view(getenv('theme.backend.path').'main/header');
                    echo view(getenv('theme.backend.path').'form/pay/fbank',$data2);
                    echo view(getenv('theme.backend.path').'main/footer');
                }else{
                    $session->setFlashdata('sweet', ['error','This payment method is not allowed in your country!']);
                    return redirect()->to('/profile');
                }
            }
        }else{
            return redirect()->to('/login');
        }
    }
}
