<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserOauthModel;

class Developers extends BaseController
{
    private $user_model;
    private $oauth_model;

    function __construct()
    {
        $this->user_model = new UserModel();
        $this->oauth_model = new UserOauthModel();
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
                    'module' => 'Developers',
                    'page'   => 'Tokens',
                    'icon'  => 'fas fa-code'
                ];

                $data['breadcrumb'] = [
                    ['title' => lang("App.menu_dashboard"), 'route' => "/dashboard", 'active' => false],
                    ['title' => 'Developers', 'route'  => "", 'active' => true]
                ];

                $table = new \CodeIgniter\View\Table([
                    'table_open' => '<table id="table-grid" class="table">'
                ]);
         
                $table->setHeading('Name', 'Mode', 'Token', 'Last Used', 'Options');
                $data['obj'] = $this->user_model->where('id_user',$id_user)->first();
                if($data['obj']['mode'] == 'live'){
                    $data['grid'] = $this->user_model->select('live_api_name, mode, live_api_key, last_used, id_user AS options')
                    ->where('id_user',$id_user)
                    ->orderBy('id_user','DESC')
                    ->findAll();
                    if($data['obj']['live_api_key'] != ""){
                        $data['btn_regen'] = [
                            'title' => 'Regenerate Token',
                            'route'   => '/developers/regen',
                            'class'   => 'btn btn-lg btn-primary float-md-right',
                            'icon'  => 'fas fa-cogs'
                        ];
                    }else{
                        $data['btn_regen'] = [
                            'title' => 'Generate Token',
                            'route'   => '/developers/regen',
                            'class'   => 'btn btn-lg btn-primary float-md-right',
                            'icon'  => 'fas fa-plus'
                        ];
                        $data['grid'] = [];
                    }
                }else{
                    $data['grid'] = $this->user_model->select('test_api_name, mode, test_api_key, last_used, id_user AS options')
                    ->where('id_user',$id_user)
                    ->orderBy('id_user','DESC')
                    ->findAll();
                    if($data['obj']['test_api_key'] != ""){
                        $data['btn_regen'] = [
                            'title' => 'Regenerate Token',
                            'route'   => '/developers/regen',
                            'class'   => 'btn btn-lg btn-primary float-md-right',
                            'icon'  => 'fas fa-cogs'
                        ];
                    }else{
                        $data['btn_regen'] = [
                            'title' => 'Generate Token',
                            'route'   => '/developers/regen',
                            'class'   => 'btn btn-lg btn-primary float-md-right',
                            'icon'  => 'fas fa-plus'
                        ];
                        $data['grid'] = [];
                    }
                }

                foreach ($data['grid'] as $key => $value){
                    $id = $data['grid'][$key]['options'];
                    $data['grid'][$key]['options'] = ''.
                        '<div class="btn-group mr-1 mb-1" xmlns="http://www.w3.org/1999/html">
                            <button type="button" class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Options
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" onclick="delete_key(\''.$data['obj']['mode'].'\');"><i class="fas fa-trash"></i> Delete</button>
                            </div>
                            </div>
                        ';
                }

                $data['table'] = $table;
                echo view(getenv('theme.backend.path').'main/header');
                echo view(getenv('theme.backend.path').'form/developers/index',$data);
                echo view(getenv('theme.backend.path').'main/footer');
                break;
            default:
                echo view(getenv('theme.backend.path').'main/header');
                echo view(getenv('theme.backend.path').'form/dashboard/index');
                echo view(getenv('theme.backend.path').'main/footer');
        endswitch;
    }

    public function regen()
    {
        $session = session();
        helper('form');
        $id_user = $session->get('id_user');
        $data['obj'] = $this->user_model->where('id_user',$id_user)->first();
        $data['title'] = [
            'module' => 'Generate',
            'page'   => 'Access Token',
            'icon'  => 'fas fa-key'
        ];
 
        $data['breadcrumb'] = [
            ['title' => 'Dashboard', 'route' => "/home", 'active' => false],
            ['title' => 'Token', 'route' => "/developers", 'active' => false],
            ['title' => 'Generate Token', 'route'  => "", 'active' => true]
        ];
 
        $data['btn_return'] = [
            'title' => 'Go Back',
            'route'   => '/developers',
            'class'   => 'btn btn-dark mr-1',
            'icon'  => 'fas fa-angle-left'
        ];
 
        $data['btn_submit'] = [
            'title' => 'Generate',
            'route'   => '',
            'class'   => 'btn btn-primary mr-1',
            'icon'  => 'fas fa-cogs'
        ];
 
        echo view(getenv('theme.backend.path').'main/header');
        echo view(getenv('theme.backend.path').'form/developers/form',$data);
        echo view(getenv('theme.backend.path').'main/footer');
    }

    public function regenerate()
    {
        $session = session();
        if(!empty($session->get('token'))){
            $id_user = $session->get('id_user');
            helper('form');
    
            $rules = [
                'name'        => 'required|max_length[50]',
                'mode'        => 'required'
            ];
    
            $rules_error = [
                'name' => [
                    'required' => 'Token name field is required.',
                    'max_length' => 'Token name cannot be more than 50 characters'
                ],
                'mode' => [
                    'required' => 'One or More parameter(s) missing!',
                ]
            ];
    
            if ($this->validate($rules,$rules_error)){
                $mode = $this->request->getPost('mode');
                $key = 'travsify_'.$mode.'_'.implode('-', str_split(substr(strtolower(md5(microtime().rand(1000, 9999))), 0, 30), 6));
                if($mode == "live"){
                    $this->user_model->save([
                        'id_user' => $id_user,
                        'live_api_name' => $this->request->getPost('name'),
                        'live_api_key' => $key
                    ]);
                }else{
                    $this->user_model->save([
                        'id_user' => $id_user,
                        'test_api_name' => $this->request->getPost('name'),
                        'test_api_key' => $key
                    ]);
                }
                $session->setFlashdata('sweet', ['success','Token Created Successfully!']);
                return redirect()->to('/developers');
            }else{
                $session->setFlashdata('error','error');
                $this->regen();
            }
        }else{
            return redirect()->to('/login');
        }
    }

    public function delete($mode)
    {
        $session = session();
        if(!empty($session->get('token'))){
            $id = $session->get('id_user');
            if($mode == "live"){
                $this->user_model->set('live_api_key', "")->where('id_user', $id)->update();
            }else{
                $this->user_model->set('test_api_key', "")->where('id_user', $id)->update();
            }
            $session->setFlashdata('sweet', ['success','Token Successfully Deleted!']);
            return redirect()->to('/developers');
        }else{
            return redirect()->to('/login');
        }
    }

    public function update($mode)
    {
        $session = session();
        if(!empty($session->get('token'))){
            $id = $session->get('id_user');
            $this->user_model->set('mode', $mode)->where('id_user', $id)->update();
            $session->set('mode', $mode);
            $session->setFlashdata('sweet', ['success',ucfirst($mode).' Mode Activated Successfully!']);
            return redirect()->to('/developers');
        }else{
            return redirect()->to('/login');
        }
    }
}
