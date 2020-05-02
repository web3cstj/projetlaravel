<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('nom')->get();
        return view("users.index", ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = new User();
        // $user->province = "Québec";
        $user = User::fake();
        return view('users.create', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('annuler')){
            return redirect()->action("UserController@index");
        }
        $donnees = $request->all();
        $user = new User();
        $user->fill($donnees);
        $user->save();
        return redirect()->action("UserController@show", $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$user = User::find($id);
        return view("users.show", ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("users.edit", ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->has('annuler')){
            return redirect()->action("UserController@show", $user);
        }
        $donnees = $request->all();
        if (!$donnees['password']) {
            $donnees['password'] = $user['password'];
        }
        $user->fill($donnees);
        $user->save();
        return redirect()->action("UserController@show", $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        return view("users.delete", ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        if ($request->has('annuler')){
            return redirect()->action("UserController@show", $user);
        }
        $user->posts()->delete();
        $user->delete();
        return redirect()->action("UserController@index");
    }
}
