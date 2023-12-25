<?php
namespace App\Models;

class UserModel extends BaseModel
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'group',
        'first_name',
        'last_name',
        'date_birth',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'mobile',
        'email',
        'password',
        'last_ip',
        'last_access',
        'picture',
        'language',
        'tfa',
        'tfa_secret',
        'tfa_code',
        'blocked',
        'email_confirmed',
        'sms_confirmed',
        'token',
        'status',
        'balance',
        'live_api_key',
        'test_api_key',
        'live_api_name',
        'test_api_name',
        'last_used',
        'mode'
    ];
    protected $useTimestamps = true;
    protected $lastField  = 'last_used';
    protected $updatedField  = 'updated_at';
    protected $createdField  = 'created_at';
}