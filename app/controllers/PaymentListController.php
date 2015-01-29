<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 5:53 AM
 */

class PaymentListController extends BaseController {

    public function index()
    {
        $paymentlist = PaymentList::all();

        // load the view and pass the nerds
        return View::make('paymentlist.index');
    }

    public function create()
    {
        return View::make('paymentlist.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), PaymentList::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('paymentlist/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $paymentlist = new PaymentList;
            $paymentlist->pay_id = 1;
            $paymentlist->reg_id = 1;
            $paymentlist->item_id = 1;
            $paymentlist->con_id = 1;
            $paymentlist->emp_id = 1;
            $paymentlist->checkin_type = Input::get('checkin_type');
            $paymentlist->patient_direction = Input::get('patient_direction');
            $paymentlist->quantity = Input::get('quantity');
            $paymentlist->bill_type = Input::get('bill_type');
            $paymentlist->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('paymentlist/create');
        }
    }

} 