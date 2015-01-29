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

        $patients = Patient::orderBy('id','desc')->get();

        // load the view and pass the nerds
        return View::make('patient.index')
            ->with('patients', $patients);
    }

    public function create()
    {
        $sponsor = array('' => 'Select Sponsor') + Sponser::lists('name','id');

        return View::make('patient.create')
            ->with('sponsor',$sponsor);
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

    public function show($id)
    {
        // get the asset
        $patient = Patient::find($id);

        // show the view and pass the asset to it
        return View::make('patient.show')
            ->with('patient', $patient);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the asset
        $patient= Patient::find($id);

        // show the edit form and pass the asset
        return View::make('patient.edit')
            ->with('patient', $patient);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        $validator = Validator::make(Input::all(), Patient::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('patient/' . $id . '/edit')
                ->with('error', 'The following errors occurred')
                ->withInput(Input::all())
                ->withErrors($validator);
        } else {
            // store
            $patient = Patient::find($id) ;
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
            Session::flash('message', 'Successfully updated patient!');
            return Redirect::to('patient');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $patient= Patient::find($id);
        $patient->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the patient!');
        return Redirect::to('patient');
    }


} 