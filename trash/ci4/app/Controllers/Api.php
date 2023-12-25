<?php

namespace App\Controllers;

use App\Libraries\PasswordHash;
use App\Models\SettingsModel;
use App\Models\UserModel;
use App\Models\UserOauthModel;
use App\Models\FlightModel;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Validation\Exceptions\ValidationException;
use Config\Services;

class Api extends ResourceController
{
    private $user_model;
    private $oauth_model;
    private $settings_model;
    private $flight_model;
    private $data_format;
    private $origin; 
    private $destination; 
    private $d_date;
    private $origin2; 
    private $destination2; 
    private $d_date2;
    private $adult; 
    private $child; 
    private $infant; 
    private $class;
    private $env;
    private $trip;
    private $c1;
    private $c2;
    private $c3;
    private $c4;
    private $user_id;
    private $offer_code;
    private $search_id;
    private $booking_token;
    private $travellers;
    private $email;
    private $phone;

    function __construct()
    {
        $this->user_model = new UserModel();
        $this->oauth_model = new UserOauthModel();
        $this->settings_model = new SettingsModel();
        $this->flight_model = new FlightModel();
        $this->data_format = getenv('api.return')??'json';
    }

    public function index()
    {
        return $this->response->setJSON([
            'message' => 'Welcome!'
        ]);
    }

    public function status()
    {
        return $this->response->setJSON([
            'status' => true,
            'message' => 'The system is running!'
        ]);
    }

    public function signIn()
    {
        $rules = [
            'email' => 'required|valid_email|validateAuthPermission[email]',
            'password' => 'required|validateAuthPassword[email, password]'
        ];
        $errors = [
            'email' => [
                'required'    => 'The email field is required.',
                'valid_email' => 'Invalid email.',
                'validateAuthPermission' => 'This user {value} does not have access permission.'
            ],
            'password' => [
                'required'             => 'The password field is required.',
                'validateAuthPassword' => 'Invalid password.'
            ]
        ];
        $input = $this->baseRequest($this->request);
        if (!$this->baseValidateRequest($input, $rules, $errors)) {
            return $this->baseResponse($this->validator->getErrors(),ResponseInterface::HTTP_BAD_REQUEST);
        }
        return $this->generateCredential($input['email']);
    }

    private function generateCredential(string $email, int $responseCode = ResponseInterface::HTTP_OK){
        try {
            helper('jwt');
            return $this->baseResponse([
                'access_token' => jwtSignature($email)
            ]);
        } catch (\Exception $exception) {
            return $this->baseResponse(['error' => $exception->getMessage()], $responseCode);
        }
    }

    private function baseResponse(array $responseBody, int $code = ResponseInterface::HTTP_OK)
    {
        if($this->data_format == 'json'){
            return $this->response->setStatusCode($code)->setJSON($responseBody)??'';
        }else{
            return $this->response->setStatusCode($code)->setXML($responseBody)??'';
        }
    }

    private function baseRequest(IncomingRequest $request){
        return $request->getVar()??[];
    }

    private function baseValidateRequest(array $input, array $rules, array $messages = []){
        $this->validator = Services::Validation()->setRules($rules);
        if (is_string($rules)) {
            $validation = config('Validation');
            if (!isset($validation->$rules)) {
                throw ValidationException::forRuleNotFound($rules);
            }
            if (!$messages) {
                $errorName = $rules . '_errors';
                $messages = $validation->$errorName ?? [];
            }
            $rules = $validation->$rules;
        }
        return $this->validator->setRules($rules, $messages)->run($input);
    }

    public function user($method = null, $key = null)
    {
        switch ($method):
            /**
             * Return all users.
             */
            case 'all':
                try {
                    $data = $this->user_model->select('token,first_name,last_name,date_birth,email,mobile,picture,language,address,address,state,country,zip_code,status,created_at,updated_at')->findAll()??[];
                    return $this->setResponseFormat($this->data_format)->respond($data);
                } catch (\Exception $exception) {
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => true,
                        'message' => $exception->getMessage()
                    ]);
                }
            /**
             * Return user for token id.
             */
            case 'id':
                try {
                    $data = $this->user_model->select('token,first_name,last_name,date_birth,email,mobile,picture,language,address,address,state,country,zip_code,status,created_at,updated_at')->where('token',$key)->first()??[];
                    return $this->setResponseFormat($this->data_format)->respond($data);
                } catch (\Exception $exception) {
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => true,
                        'message' => $exception->getMessage()
                    ]);
                }
            /**
             * Return add user.
             */
            case 'add':
                try {
                    $body = $this->request->getVar() == [] ? (array) $this->request->getJSON() : $this->request->getVar();
                    if(empty($body["first_name"]??"")){
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'The first name parameter is null or empty.'
                        ]);
                    }
                    if(empty($body["last_name"]??"")){
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'The last name parameter is null or empty.'
                        ]);
                    }
                    if(empty($body["email"]??"")){
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'The email parameter is null or empty.'
                        ]);
                    }else{
                        $validate = $this->user_model->where('email',$body["email"]??"")->countAllResults();
                        if($validate > 0){
                            return $this->setResponseFormat($this->data_format)->respond([
                                'error' => true,
                                'message' => 'Email already registered!'
                            ]);
                        }
                    }
                    if(empty($body["password"]??"")){
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'The password parameter is null or empty.'
                        ]);
                    }else{
                        if(strlen($body["password"]??"") < 8){
                            return $this->setResponseFormat($this->data_format)->respond([
                                'error' => true,
                                'message' => 'Password must be at least 8 characters long.'
                            ]);
                        }
                    }
                    $settings = $this->settings_model->first()??[];
                    $phpass = new PasswordHash(8, true);
                    $token = md5(uniqid(rand(), true));
                    $this->user_model->save([
                        'group' => $settings['default_role'],
                        'first_name' => $body['first_name'],
                        'last_name' => $body['last_name'],
                        'mobile' => '',
                        'picture' => '/assets/img/default-user.png',
                        'email' => $body['email'],
                        'password' => $phpass->HashPassword($body['password']),
                        'last_access' => date('Y-m-d h:i:s'),
                        'last_ip' => '::1',
                        'language' => $settings['default_language'],
                        'token' => $token,
                        'status' => true
                    ]);
                    $data = $this->user_model->select('token,first_name,last_name,date_birth,email,mobile,picture,language,address,address,state,country,zip_code,status,created_at,updated_at')->where('token',$token)->first()??[];
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => false,
                        'message' => 'Added successfully!',
                        'data' => $data??[]
                    ]);
                } catch (\Exception $exception) {
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => true,
                        'message' => $exception->getMessage()
                    ]);
                }
            /**
             * Return edit user.
             */
            case 'edit':
                try {
                    $data = $this->user_model->where('token',$key)->first()??[];
                    if($data == []){
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'User not found!'
                        ]);
                    }
                    $body = $this->request->getVar() == [] ? (array) $this->request->getJSON() : $this->request->getVar();
                    $this->user_model->save([
                        'id_user' => $data['id_user'],
                        'first_name' => empty($body["first_name"]??"")?$data['first_name']:$body["first_name"]??"",
                        'last_name' => empty($body["last_name"]??"")?$data['last_name']:$body["last_name"]??"",
                        'date_birth' => empty($body["date_birth"]??"")?$data['date_birth']:$body["date_birth"]??"",
                        'address' => empty($body["address"]??"")?$data['address']:$body["address"]??"",
                        'city' => empty($body["city"]??"")?$data['city']:$body["city"]??"",
                        'state' => empty($body["state"]??"")?$data['state']:$body["state"]??"",
                        'country' => empty($body["country"]??"")?$data['country']:$body["country"]??"",
                        'zip_code' => empty($body["zip_code"]??"")?$data['zip_code']:$body["zip_code"]??"",
                        'mobile' => empty($body["mobile"]??"")?$data['mobile']:$body["mobile"]??"",
                        'status' => empty($body["status"]??"")?$data['status']:$body["status"]??""
                    ]);
                    $data = $this->user_model->select('token,first_name,last_name,date_birth,email,mobile,picture,language,address,address,state,country,zip_code,status,created_at,updated_at')->where('token',$key)->first()??[];
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => false,
                        'message' => 'Successfully Edited!',
                        'data' => $data??[]
                    ]);
                } catch (\Exception $exception) {
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => true,
                        'message' => $exception->getMessage()
                    ]);
                }
            /**
             * Return delete user.
             */
            case 'delete':
                try {
                    $this->user_model->where('token', $key)->delete();
                    $this->oauth_model->where('user', $key)->delete();
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => false,
                        'message' => 'Successfully deleted!'
                    ]);
                } catch (\Exception $exception) {
                    return $this->setResponseFormat($this->data_format)->respond([
                        'error' => true,
                        'message' => $exception->getMessage()
                    ]);
                }
            /**
             * Return Default.
             */
            default:
                return $this->setResponseFormat($this->data_format)->respond([
                    'error' => true,
                    'message' => 'Method call is invalid.'
                ]);
        endswitch;
    }

    public function flights($type = "")
    {
        switch ($type):
            case 'search':
                $method = $this->request->getMethod(true);
                switch ($method):
                    case 'POST':
                        $header = $this->header_checker($this->request);
                        if($header == ""){ //header is cleared
                            $data = $this->data_checker($this->request);
                            if($data == ""){ //data taken
                                $settings = $this->settings_model->first()??[];
                                $currency = "";
                                if($this->env == "pro"){
                                    $currency = $settings['default_currency'];
                                }else{
                                    $currency = "EUR";
                                }
                                $client = \Config\Services::curlrequest();
                                $response = $client->request('POST', 'https://travsify.com/modules/flights/xml/api/v1/search', [
                                    'form_params' => [
                                        'origin' => $this->origin,
                                        'destination' => $this->destination,
                                        'departure_date' => $this->d_date,
                                        'adults' => $this->adult,
                                        'childrens' => $this->child,
                                        'infants' => $this->infant,
                                        'currency' => $currency,
                                        'type' => $this->trip,
                                        'class_trip' =>strtolower($this->class),
                                        'c1' => $this->c1,
                                        'c2' => $this->c2,
                                        'c3' => $this->c3,
                                        'c4' => $this->c4,
                                        'return_date' => $this->d_date2,
                                        'evn' => $this->env,
                                        'mode' => 'api',
                                        'rate' => $settings['rate']
                                    ]
                                ]);
                                $this->flight_model->save([
                                    'user_id' => $this->user_id,
                                    'type' => 'searches',
                                    'to_code' => $this->destination,
                                    'from_code' => $this->origin,
                                    'status' => 'confirmed',
                                    'currency' => $currency
                                ]);
                                return $this->setResponseFormat($this->data_format)->respond(json_decode($response->getBody()));
                            }else{
                                return $data;
                            }
                        }else{
                            return $header;
                        }
                    default:
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'Method call is invalid.'
                        ]);
                endswitch;
            case 'book':
                $method = $this->request->getMethod(true);
                switch ($method):
                    case 'POST':
                        $header = $this->header_checker($this->request);
                        if($header == ""){ //header is cleared
                            $data = $this->book_data_checker($this->request);
                            if($data == ""){ //data taken
                                $settings = $this->settings_model->first()??[];
                                $currency = "";
                                if($this->env == "pro"){
                                    $currency = $settings['default_currency'];
                                }else{
                                    $currency = "EUR";
                                }
                                $client = \Config\Services::curlrequest();
                                $response = $client->request('POST', 'https://travsify.com/modules/flights/xml/api/v1/api_booking', [
                                    'form_params' => [
                                        'offer_code' => $this->offer_code,
                                        'search_id' => $this->search_id,
                                        'booking_token' => $this->booking_token,
                                        'currency' => $currency,
                                        'travellers' => $this->travellers,
                                        'c1' => $this->c1,
                                        'c2' => $this->c2,
                                        'c3' => $this->c3,
                                        'c4' => $this->c4,
                                        'phone' => $this->phone,
                                        'email' => $this->email,
                                        'evn' => $this->env,
                                        'rate' => $settings['rate']
                                    ]
                                ]);
                                $result = json_decode($response->getBody());
                                $price = "";
                                $pnr = "";
                                $id = "";
                                $status = "";
                                if($result->price){
                                    $price = $result->price;
                                }else{
                                    $price = "";
                                }
                                if($result->booking_pnr){
                                    $pnr = $result->booking_pnr;
                                }else{
                                    $pnr = "";
                                }
                                if($result->booking_id){
                                    $id = $result->booking_id;
                                }else{
                                    $id = "";
                                }
                                if($result->type == "success"){
                                    $status = "confirmed";
                                }else if($result->type == "warning"){
                                    $status = "pending";
                                }else{
                                    $status = "cancelled";
                                }
                                $this->flight_model->save([
                                    'user_id' => $this->user_id,
                                    'type' => 'bookings',
                                    'to_code' => $this->destination,
                                    'from_code' => $this->origin,
                                    'booking_id' => $id,
                                    'status' => $status,
                                    'currency' => $currency,
                                    'price' => $price,
                                    'pnr' => $pnr
                                ]);
                                return $this->setResponseFormat($this->data_format)->respond(json_decode($response->getBody()));
                            }else{
                                return $data;
                            }
                        }else{
                            return $header;
                        }
                    default:
                        return $this->setResponseFormat($this->data_format)->respond([
                            'error' => true,
                            'message' => 'Method call is invalid.'
                        ]);
                endswitch;
            default:
                return $this->setResponseFormat($this->data_format)->respond([
                    'error' => true,
                    'message' => 'Method call is invalid.'
                ]);
        endswitch;
    }

    private function header_checker($request)
    {
        if(!str_contains($request->getHeaderLine('accept-encoding'), "gzip")){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing header \'Accept-Encoding\' or Unacceptable value'
            ]);
        }else if(!str_contains($request->getHeaderLine('Accept'), "application/json")){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing header \'Accept\' or Unacceptable value'
            ]);
        }else if(!str_contains($request->getHeaderLine('Content-Type'), "application/json")){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing header \'Content-Type\' or Unacceptable value'
            ]);
        }else if($request->getHeaderLine('Travsify-Version') != "v1"){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing header \'Travsify-Version\' or Unacceptable version'
            ]);
        }else if($request->getHeaderLine('Authorization') == ""){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Authorization: Bearer missing!'
            ]);
        }else{
            $checked = $this->auth_checker($request->getHeaderLine('Authorization'));
            if($checked == ""){
                return "";
            }else{
                return $checked;
            }
        }
    }

    private function auth_checker($code)
    {
        if(preg_match('/Bearer\s(\S+)/', $code, $token)){
            $evn = "";
            try {
                if(str_contains($token[1], "travsify_live")){
                    $evn = "live";
                }else if(str_contains($token[1], "travsify_test")){
                    $evn = "test";
                }else{
                    return $this->response->setJSON([
                        'error' => true,
                        'message' => 'Invalid Authorization Token'
                    ]);
                }
                $data = $this->user_model->select('id_user, mode')->where($evn.'_api_key',$token[1])->first()??[];
                $this->user_id = $data['id_user'];
                if($data == []){
                    return $this->response->setJSON([
                        'error' => true,
                        'message' => 'Invalid Authorization Token'
                    ]);
                }else{
                    $this->user_model->set('last_used', date('Y-m-d h:i:s'))->where('id_user', $this->user_id)->update();
                    if($data['mode'] == 'live'){
                        $this->env = 'pro';
                        $this->c1 = 'Travsify';
                        $this->c2 = 'fhshj#sh4';
                        $this->c3 = 'Travsify';
                        $this->c4 = '74966410-6159-4B2B-A7A6-E52E2FF6DF0C';
                    }else{
                        $this->env = 'dev';
                        $this->c1 = 'test';
                        $this->c2 = 'test';
                        $this->c3 = 'test';
                        $this->c4 = '00000000-0000-0000-0000-000000000000';
                    }
                    return "";
                }
            } catch (\Exception $exception) {
                return $this->setResponseFormat($this->data_format)->respond([
                    'error' => true,
                    'message' => $exception->getMessage()
                ]);
            }
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Invalid Authorization Token'
            ]);
        }
    }

    private function data_checker($request)
    {
        if(is_array($request->getVar('data.slices'))){
            if(count($request->getVar('data.slices')) > 0){
                if(count($request->getVar('data.slices')) > 1){
                    $this->trip = "round";
                    $this->origin = $request->getVar('data.slices.0.origin');
                    $error = $this->emptyness($this->origin, 'data >>> slices >>> origin 1');
                    if(!empty($error)) return $error;
                    $this->destination = $request->getVar('data.slices.0.destination'); 
                    $error = $this->emptyness($this->destination, 'data >>> slices >>> destination 1');
                    if(!empty($error)) return $error;
                    $this->d_date = $request->getVar('data.slices.0.departure_date');
                    $error = $this->emptyness($this->d_date, 'data >>> slices >>> departure_date 1');
                    if(!empty($error)) return $error;
                    $this->origin2 = $request->getVar('data.slices.1.origin'); 
                    $error = $this->emptyness($this->origin2, 'data >>> slices >>> origin 2');
                    if(!empty($error)) return $error;
                    $this->destination2 = $request->getVar('data.slices.1.destination');
                    $error = $this->emptyness($this->destination2, 'data >>> slices >>> destination 2'); 
                    if(!empty($error)) return $error;
                    $this->d_date2 = $request->getVar('data.slices.1.departure_date');
                    $error = $this->emptyness($this->d_date2, 'data >>> slices >>> departure_date 2');
                    if(!empty($error)) return $error;
                }else{
                    $this->trip = "oneway";
                    $this->d_date2 = "";
                    $this->origin = $request->getVar('data.slices.0.origin'); 
                    $error = $this->emptyness($this->origin, 'data >>> slices >>> origin 1');
                    if(!empty($error)) return $error;
                    $this->destination = $request->getVar('data.slices.0.destination'); 
                    $error = $this->emptyness($this->destination, 'data >>> slices >>> destination 1');
                    if(!empty($error)) return $error;
                    $this->d_date = $request->getVar('data.slices.0.departure_date');
                    $error = $this->emptyness($this->d_date, 'data >>> slices >>> departure_date 1');
                    if(!empty($error)) return $error;
                }
            }else{
                return $this->response->setJSON([
                    'error' => true,
                    'message' => 'Missing data >>> slices in body of request'
                ]);
            }
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing slices in data of request'
            ]);
        }

        if(is_array($request->getVar('data.passengers'))){
            if(count($request->getVar('data.passengers')) == 3){
                    if(!$request->getVar('data.passengers.0.type') || !$request->getVar('data.passengers.1.type') || !$request->getVar('data.passengers.2.type')){
                        return $this->response->setJSON([
                            'error' => true,
                            'message' => 'First item on the data >>> passengers list must be [type]'
                        ]);
                    }else{
                        //adult
                        if($request->getVar('data.passengers.0.type') == "adult"){
                            $this->adult = $request->getVar('data.passengers.0.no');
                            $error = $this->emptyness($this->adult, 'data >>> passengers >>> adult no.');
                            if(!empty($error)) return $error;
                        }else{
                            return $this->response->setJSON([
                                'error' => true,
                                'message' => 'First [type] on the data >>> passengers list must be adult'
                            ]);
                        }
                        //child
                        if($request->getVar('data.passengers.1.type') == "child"){
                            $this->child = $request->getVar('data.passengers.1.no');
                            $error = $this->emptyness($this->child, 'data >>> passengers >>> child no.');
                            if(!empty($error)) return $error;
                        }else{
                            return $this->response->setJSON([
                                'error' => true,
                                'message' => 'Second [type] on the data >>> passengers list must be child'
                            ]);
                        }
                        //infant
                        if($request->getVar('data.passengers.2.type') == "infant"){
                            $this->infant = $request->getVar('data.passengers.2.no');
                            $error = $this->emptyness($this->infant, 'data >>> passengers >>> infant no.');
                            if(!empty($error)) return $error;
                        }else{
                            return $this->response->setJSON([
                                'error' => true,
                                'message' => 'Third [type] on the data >>> passengers list must be infant'
                            ]);
                        }
                    }
            }else{
                return $this->response->setJSON([
                    'error' => true,
                    'message' => 'One of adult, child, infant Missing in data >>> passengers of the request'
                ]);
            }
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing passengers in data of request'
            ]);
        }

        if(!$request->getVar('data.cabin_class')){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing cabin_class or empty in data of request'
            ]);
        }else{
            if($request->getVar('data.cabin_class') != ""){
                if($request->getVar('data.cabin_class') == "Economy" || $request->getVar('data.cabin_class') == "Business"){
                    $this->class = $request->getVar('data.cabin_class');
                }else{
                    return $this->response->setJSON([
                        'error' => true,
                        'message' => 'data >>> cabin_class can only be of Economy or Business'
                    ]);
                }
            }else{
                return $this->response->setJSON([
                    'error' => true,
                    'message' => 'data >>> cabin_class cannot be empty must be of value Economy or Business'
                ]);
            }
        }
    }

    private function book_data_checker($request)
    {
        if($request->getVar('data.order_info')){
            $this->offer_code = $request->getVar('data.order_info.offer_code');
            $error = $this->emptyness($this->offer_code, 'data >>> order_info >>> offer_code');
            if(!empty($error)) return $error;
            $this->search_id = $request->getVar('data.order_info.search_id');
            $error = $this->emptyness($this->search_id, 'data >>> order_info >>> search_id');
            if(!empty($error)) return $error;
            $this->booking_token = $request->getVar('data.order_info.booking_token');
            $error = $this->emptyness($this->booking_token, 'data >>> order_info >>> booking_token');
            if(!empty($error)) return $error;
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing order_info in data of request'
            ]);
        }

        if(is_array($request->getVar('data.travellers'))){
            if(count($request->getVar('data.travellers')) > 0){
                foreach($request->getVar('data.travellers') as $trav){
                    if(isset($trav->type)){
                        $error = $this->emptyness($trav->type, 'data >>> travellers >>> type');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('type');
                        if(!empty($error)) return $error;
                    }if(isset($trav->dob)){
                        $error = $this->emptyness($trav->dob, 'data >>> travellers >>> dob');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('dob');
                        if(!empty($error)) return $error;
                    }if(isset($trav->nationality)){
                        $error = $this->emptyness($trav->nationality, 'data >>> travellers >>> nationality');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('nationality');
                        if(!empty($error)) return $error;
                    }if(isset($trav->passport)){
                        $error = $this->emptyness($trav->passport, 'data >>> travellers >>> passport');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('passport');
                        if(!empty($error)) return $error;
                    }if(isset($trav->gender)){
                        $error = $this->emptyness($trav->gender, 'data >>> travellers >>> gender');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('gender');
                        if(!empty($error)) return $error;
                    }if(isset($trav->first_name)){
                        $error = $this->emptyness($trav->first_name, 'data >>> travellers >>> first_name');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('first_name');
                        if(!empty($error)) return $error;
                    }if(isset($trav->last_name)){
                        $error = $this->emptyness($trav->last_name, 'data >>> travellers >>> last_name');
                        if(!empty($error)) return $error;
                    }else{
                        $error = $this->trav_list('last_name');
                        if(!empty($error)) return $error;
                    }
                }
                $this->travellers = $request->getJsonVar('data.travellers');
            }else{
                return $this->response->setJSON([
                    'error' => true,
                    'message' => 'Travellers list cannot empty'
                ]);
            }
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing travellers in data of request'
            ]);
        }

        if($request->getVar('data.phone')){
            $error = $this->emptyness($request->getVar('data.phone'), 'data >>> phone');
            if(!empty($error)) return $error;
            $this->phone = $request->getVar('data.phone');
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing phone in data of request'
            ]);
        }
        
        if($request->getVar('data.email')){
            $error = $this->emptyness($request->getVar('data.email'), 'data >>> email');
            if(!empty($error)) return $error;
            $this->email = $request->getVar('data.email');
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing email in data of request'
            ]);
        }
    }

    private function emptyness($data, $name){
        if($data == ""){
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Missing '.$name.' value in body of request'
            ]);
        }
    }

    private function trav_list($name){
        return $this->response->setJSON([
            'error' => true,
            'message' => '['.$name.'] missing on the data >>> travellers list'
        ]);
    }
}
