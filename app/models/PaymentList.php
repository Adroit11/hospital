<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 6:04 AM
 */

class PaymentList extends Eloquent {

    protected $table = 'paymentlist';

    public static $rules = array(
        'bill_type'=>'required',
        'quantity'=>'required'
    );

} 