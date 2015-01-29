<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 6:13 AM
 */

class Sponser extends Eloquent {

    protected $table = 'sponser';

    public static $rules = array(
        'name'=>'required',
        'code'=>'required'
    );

} 