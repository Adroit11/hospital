<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 6:15 AM
 */

class SponserController extends BaseController {

    public function index()
    {
        $results = Result::all();

        // load the view and pass the nerds
        return View::make('sponser.index');
    }

    public function create()
    {
        return View::make('sponser.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), Sponser::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('sponser/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $sponser = new Sponser;
            $sponser->name = Input::get('name');
            $sponser->code = Input::get('code');
            $sponser->tel = Input::get('tel');
            $sponser->address = Input::get('address');

            $sponser->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('sponser/create');
        }
    }

} 