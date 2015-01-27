<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/27/15
 * Time: 12:44 AM
 */

class Payment extends Eloquent{

    protected $table = 'payment';

    public static $rules = array(
        'bill_type'=>'required',
        'con_id'=>'required'
    );

} 