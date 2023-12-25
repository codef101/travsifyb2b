<?php
namespace App\Models;

class PaymentModel extends BaseModel
{
    protected $table = 'payment_log';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'type',
        'currency',
        'price',
        'balance',
        'description',
        'ref_no'
    ];
    protected $useTimestamps = true;
    protected $timeField  = 'time';
}