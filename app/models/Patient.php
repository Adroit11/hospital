<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/26/15
 * Time: 9:46 PM
 */

class Patient extends Eloquent {

    protected $table = 'registration';

    public static $rules = array(
        'name'=>'required',
        'gender'=>'required'
    );

}

