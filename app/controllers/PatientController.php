<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/26/15
 * Time: 9:28 PM
 */

class PatientController extends BaseController{

    public function index()
    {
        $patients = Patient::all();

        // load the view and pass the nerds
        return View::make('patient.index');
    }

    public function create()
    {
        return View::make('patient.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), Patient::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('patient/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $patient = new Patient;
            $patient->name = Input::get('name');
            $patient->dob = Input::get('dob');
            $patient->gender = Input::get('gender');
            $patient->region = Input::get('region');
            $patient->district = Input::get('district');
            $patient->district = Input::get('district');
            $patient->ward = Input::get('ward');
            $patient->sponser_id = 1;
            $patient->member_no = Input::get('memberNo');
            $patient->tel = Input::get('tel');
            $patient->email = Input::get('email');
            $patient->occupation = Input::get('occupation');
            $patient->emerg_tel = Input::get('emerg_tel');
            $patient->emerg_name = Input::get('emerg_name');

            $patient->emp_id = 1;

            $patient->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('patient/create');
        }
    }

} 