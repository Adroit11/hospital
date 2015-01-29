<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'employees';

	protected $hidden = array('password', 'remember_token');

    public static $rules = array(
        'name'=>'required|min:4',
        'number'=>'required',
        'password'=>'required|alpha_num|between:4,12|confirmed',
        'password_confirmation'=>'required',
        'level'=>'required|numeric'
    );

    public static $rules_editing = array(
        'name'=>'required|alpha_num|min:4',
        'password'=>'required|alpha_num|between:4,12|confirmed',
        'password_confirmation'=>'required',
        'level'=>'required|numeric'
    );

}
