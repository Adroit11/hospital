<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 5:18 AM
 */

class Item extends Eloquent{

    protected $table = 'item';

    public static $rules = array(
        'type'=>'required',
        'code'=>'required'
    );

} 