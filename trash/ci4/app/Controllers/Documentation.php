<?php
namespace App\Controllers;

use App\Models\SettingsModel;

class Documentation extends BaseController
{

    function __construct()
    {
        $session = session();
        $settingsBase = new SettingsModel();
        $settings = $settingsBase->first()??[];
        $session->set('settings', $settings);
        if(!session()->get('settings')['activate_frontend']){
            header('Location: /dashboard');
            die();
        }
    }

    public function index()
    {
        /*$data = [];
        echo view(getenv('theme.frontend.path').'main/header');
        echo view(getenv('theme.frontend.path').'form/documentation',$data);
        echo view(getenv('theme.frontend.path').'main/footer');*/
        return redirect()->to('https://documenter.getpostman.com/view/31094312/2s9YXk2g73');
    }

}
