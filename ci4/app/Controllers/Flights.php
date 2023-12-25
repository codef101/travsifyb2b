<?php

namespace App\Controllers;

use App\Models\FlightModel;
use App\Models\UserModel;
use App\Models\UserOauthModel;

class Flights extends BaseController
{
    private $user_model;
    private $oauth_model;
    private $flight_model;

    function __construct()
    {
        $this->user_model = new UserModel();
        $this->oauth_model = new UserOauthModel();
        $this->flight_model = new FlightModel();
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
                    'module' => 'Flight',
                    'page'   => 'Bookings',
                    'icon'  => 'fas fa-plane'
                ];

                $data['breadcrumb'] = [
                    ['title' => lang("App.menu_dashboard"), 'route' => "/dashboard", 'active' => false],
                    ['title' => 'Flights', 'route'  => "", 'active' => true]
                ];
         
                $table = new \CodeIgniter\View\Table([
                    'table_open' => '<table id="table-grid" class="table">'
                ]);
         
                $table->setHeading('ID', 'Book ID', 'Status', 'Currency', 'Price', 'PNR', 'Date Time');
         
                $data['grid'] = $this->flight_model->select('id, booking_id, status, currency, price, pnr, time')
                ->where('user_id',$id_user)->where('type','bookings')
                ->orderBy('id','DESC')
                ->findAll();
         
                $data['table'] = $table;
                echo view(getenv('theme.backend.path').'main/header');
                echo view(getenv('theme.backend.path').'form/flight/index',$data);
                echo view(getenv('theme.backend.path').'main/footer');
                break;
            default:
                echo view(getenv('theme.backend.path').'main/header');
                echo view(getenv('theme.backend.path').'form/dashboard/index');
                echo view(getenv('theme.backend.path').'main/footer');
        endswitch;
    }
}
