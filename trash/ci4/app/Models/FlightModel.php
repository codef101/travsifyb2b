<?php
namespace App\Models;

class FlightModel extends BaseModel
{
    protected $table = 'flight_logs';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'type',
        'to_code',
        'from_code',
        'status',
        'booking_id',
        'currency',
        'price',
        'pnr',
        'time'
    ];
}