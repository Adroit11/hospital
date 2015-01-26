<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/27/15
 * Time: 12:19 AM
 */

class Consultation extends Eloquent{

    protected $table = 'consultation';

    public static $rules = array(
        'complain'=>'required',
        'observation'=>'required'
    );

} 