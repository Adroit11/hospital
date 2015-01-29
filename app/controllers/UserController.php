<?php
/**
 * Created by PhpStorm.
 * User: Gabby
 * Date: 1/29/15
 * Time: 7:03 AM
 */

class UserController extends BaseController {

    public function index()
    {
        // get all the users
        $users = User::all();

        // load the view and pass the users
        return View::make('user.index')
            ->with('users', $users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form
        return View::make('user.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails()) {
            return Redirect::to('user/create')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->name = Input::get('name');
            $user->type = 1;
            $user->number = Input::get('number');
            $user->title = Input::get('title');
            $user->password = Hash::make(Input::get('password'));
            $user->level = Input::get('level');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully created User');
            return Redirect::to('user');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('user');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user= User::find($id);

        return View::make('user.edit')
            ->with('user', $user);
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
        $validator = Validator::make(Input::all(), User::$rules_editing);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('user/' . $id . '/edit')
                ->with('error', 'The following errors occurred')
                ->withErrors($validator);
        } else {
            // store
            $user = User::find($id);
            $user->name = Input::get('name');
            $user->type = Input::get('type');;
            $user->number = Input::get('number');
            $user->title = Input::get('title');
            $user->password = Hash::make(Input::get('password'));
            $user->level = Input::get('level');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully updated user!');
            return Redirect::to('user');
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
        $user = User::find($id);
        $user -> delete();

        // redirect
        Session::flash('message', 'Successfully deleted the User!');
        return Redirect::to('user');
    }


} 