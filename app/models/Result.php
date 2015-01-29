<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 5:40 AM
 */

class Result extends Eloquent {

    protected $table = 'result';

    public static $rules = array(
        'results'=>'required',
        'parameters'=>'required'
    );

} 