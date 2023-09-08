<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // 設置資料表名稱，如果您的資料表名稱不是 orders，請進行修改
    protected $table = 'orders';

    // 設定該模型可被批量賦值的欄位
    protected $fillable = [
        'id',
        'member_id',
        'order_no',
        'total_price',
        'total_qty',
        'total_discount',
        'tax',
        'net_price',
        'unit_price',
        'receiver_name',
        'receiver_phone',
        'receiver_address',
        'receiver_email',
        'receiver_time',
        'receiver_remark',
        'pay_type',
        'pay_status',
        'shipping_type',
        'shipping_status',
        'shipping_fee',
        'shipping_remark',
        'shipping_no',
        'shipping_company',
        'shipping_time',
        'shipping_address',
        'shipping_phone',
        'shipping_name',
        'shipping_email',
        'order_status',
    ];
}
