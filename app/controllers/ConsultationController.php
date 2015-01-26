<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/27/15
 * Time: 12:11 AM
 */

class ConsultationController extends BaseController{

    public function index()
    {
        $patients = Consultation::all();

        // load the view and pass the nerds
        return View::make('consultation.index');
    }

    public function create()
    {
        return View::make('consultation.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), Consultation::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('consultation/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $consultation = new Consultation;
            $consultation->complain = Input::get('complain');
            $consultation->observation = Input::get('observation');
            $consultation->comment = Input::get('comment');
            $consultation->lab = Input::get('lab');
            $consultation->process = Input::get('process');
            $consultation->signoff = Input::get('signoff');

            $consultation->emp_id = 1;
            $consultation->reg_id = 1;

            $consultation->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('patient/create');
        }
    }

} 