<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'productName', 'productQuantity', 'productPrice', 'Customer_select', 'customerPhone', 'shippingAddress1', 'shippingAddress2', 'State', 'City', 'Country', 'totalAmount'
    ];
}


// message: "SQLSTATE[HY000]: General error: 1364 Field 'Customer_select' doesn't have a default value 
// (SQL: insert into `orders` (`productCategory`, `productName`, `productQuantity`, `productPrice`, `shippingAddress1`,
//  `shippingAddress2`, `State`, `City`, `Country`, `deliveryDate`, `deliveryInstructucions`, `subtotalAmount`, 
 
//  `taxAmount`, `discountAmount`, `totalAmount`, `paid_by`, `Paid_Ref_No`, `bankName`, `Invoice_no`, `remarks`, 
//  `updated_at`, `created_at`) values (Vegetables product, Cowli, 30, 300, Koteshwor-32, Kathmandu, Bagmati, Baneshwor,
//   Nepal, 2022-07-27, Bank, 2000, 260, 200, 1540, Bishnu Bohara, 2, Nic Asia, 1, Paid, 2022-07-27 14:31:45, 
//   2022-07-27 14:31:45))"