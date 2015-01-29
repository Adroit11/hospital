<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/27/15
 * Time: 12:43 AM
 */

class PaymentController extends BaseController {
    public function index()
    {
        $patients = Patient::orderBy('id','desc')->get();

        return View::make('payment.index')
            ->with('patients', $patients);
    }

    public function create()
    {
        return View::make('payment.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), Payment::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('payment/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $payment = new Payment;
            $payment->reg_id = 1;
            $payment->con_id = 1;
            $payment->sponser_id = 2;
            $payment->bill_type = Input::get('bill_type');
            $payment->transaction_status = Input::get('transaction_status');
            $payment->emp_id = 1;
            $payment->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('payment/create');
        }
    }

    public function edit($id)
    {
        // get the asset
        $patient= Patient::find($id);
        $payment = $patient;

        // show the edit form and pass the asset
        return View::make('payment.edit')
            ->with('payment', $payment);
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
        $validator = Validator::make(Input::all(), Payment::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('payment/' . $id . '/edit')
                ->with('error', 'The following errors occurred')
                ->withInput(Input::all())
                ->withErrors($validator);
        } else {
            // store
            $payment = new Payment;
            $payment->reg_id = 1;
            $payment->con_id = 1;
            $payment->sponser_id = 2;
            $payment->bill_type = Input::get('bill_type');
            $payment->transaction_status = Input::get('transaction_status');
            $payment->emp_id = 1;
            $payment->save();

            // redirect
            Session::flash('message', 'Successfully patient payment!');
            return Redirect::to('patient');
        }
    }

} 