<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use App\Models\UserModel;
use App\Models\UserOauthModel;

class Balance extends BaseController
{
    private $user_model;
    private $oauth_model;
    private $payment_model;

    function __construct()
    {
        $this->user_model = new UserModel();
        $this->oauth_model = new UserOauthModel();
        $this->payment_model = new PaymentModel();
    }

    public function index()
    {
        $session = session();
        $id_user = $session->get('id_user');
        $name = $session->get('first_name');

        switch ($session->get('dashboard')):
            case 'admin':
                echo "";
            break;
            case 'user':
                $data['title'] = [
                    'module' => ucfirst($name),
                    'page'   => 'wallet balance',
                    'icon'  => 'fas fa-money-bill'
                ];

                $data['breadcrumb'] = [
                    ['title' => lang("App.menu_dashboard"), 'route' => "/dashboard", 'active' => false],
                    ['title' => 'Balances', 'route'  => "", 'active' => true]
                ];
                $data['obj'] = $this->user_model->where('id_user',$id_user)->first();
                $data['balance'] = [
                    'currency' => $data['obj']['currency'],
                    'amount'   => $data['obj']['balance']
                ];
                
                $selector = "";
                if($data['obj']['country'] == "NG"){
                    $selector = '<option value="trav">Travsify Checkout</option><option value="bank">Local Bank Transfer</option>';
                }else{
                    $selector = '<option value="stripe">Stripe</option><option value="fbank">Bank Transfer</option>';
                }
                
                $data['pay'] = [
                    'meth' => $selector
                ];
         
                $table = new \CodeIgniter\View\Table([
                    'table_open' => '<table id="table-grid" class="table">'
                ]);
         
                $table->setHeading('ID', 'Reference No', 'Type', 'Currency', 'Amount', 'Balance', 'Description', 'Date Time');
         
                $data['grid'] = $this->payment_model->select('id, ref_no, type, currency, price, balance, description, time')
                ->where('user_id',$id_user)
                ->orderBy('id','DESC')
                ->findAll();
         
                $data['table'] = $table;
                echo view(getenv('theme.backend.path').'main/header');
                echo view(getenv('theme.backend.path').'form/balance/index',$data);
                echo view(getenv('theme.backend.path').'main/footer');
                break;
            default:
                echo view(getenv('theme.backend.path').'main/header');
                echo view(getenv('theme.backend.path').'form/dashboard/index');
                echo view(getenv('theme.backend.path').'main/footer');
        endswitch;    
    }
}
