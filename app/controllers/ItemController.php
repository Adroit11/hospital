<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 5:13 AM
 */

class ItemController extends BaseController{
    public function index()
    {
        $item = Item::all();

        // load the view and pass the nerds
        return View::make('item.index');
    }

    public function create()
    {
        return View::make('item.create');
    }

    public function store()
    {

        $validator = Validator::make(Input::all(), Item::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('item/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $item = new Item;
            $item->type = Input::get('type');
            $item->code = Input::get('code');
            $item->unit = Input::get('unit');
            $item->name = Input::get('name');
            $item->price = Input::get('price');
            $item->status = Input::get('status');
            $item->con_type = Input::get('con_type');
            $item->save();
            // redirect
            Session::flash('message', 'Successfully created asset!');
            return Redirect::to('item/create');
        }
    }

} 