<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 5:38 AM
 */

class ResultController extends BaseController {

    public function index()
    {
        $results = Result::all();

        // load the view and pass the nerds
        return View::make('result.index');
    }

    public function create()
    {
        return View::make('result.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), Result::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('result/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $result = new Result;
            $result->parameters = Input::get('parameters');
            $result->results = Input::get('results');

            $result->emp_id = 1;
            $result->reg_id = 1;
            $result->pay_id = 1;
            $result->item_id = 1;

            $result->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('patient/create');
        }
    }

} 