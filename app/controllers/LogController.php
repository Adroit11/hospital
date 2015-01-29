<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 1:40 PM
 */

class LogController extends BaseController {

    public function getLogin (){
        return View::make('login');

    }

    public function postLogin (){

        if (Auth::attempt(array('name'=>Input::get('name'), 'password'=>Input::get('password')))) {
            $name = Auth::user()->name;
            $level = Auth::user()->level;
            Session::put('myName', $name);
            Session::put('myLevel',$level);
            return Redirect::to('dashboard')->with('message', 'You are now logged in!');
        } else {
            return Redirect::back()
                ->with('error', 'Your username/password combination was incorrect!')
                ->withInput();
        }
    }

    public function getLogout()
    {
        Auth::logout(); // log the user out of our application
        Session::forget('myName');
        Session::forget('myLevel');
        return Redirect::to('login')
            ->with('message', 'You are now logged Out...!!'); // redirect the user to the login screen
    }


} 