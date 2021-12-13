<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this-> middleware('admin');
    }
    
    public function index()
    {
        $batas = 3;
        $data_users = User::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($data_users -> currentPage() - 1);
        return view('users.home', compact('data_users', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate(
            $request,
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'level' => 'required|string',
            ],
        );

        $users = new User;
        $users -> name = $request -> name;
        $users -> email = $request -> email;
        $users -> password = Hash::make($request['password']);
        $users -> level = $request -> level;
        $users -> save();
        return redirect('/users') -> with('pesan', 'Data Users Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_users = User::find($id);
        return view('users.edit', compact('data_users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users -> name = $request -> name;
        $users -> email = $request -> email;
        $users -> password = Hash::make($request['password']);
        $users -> level = $request -> level;
        $users -> update();
        return redirect('/users') -> with('pesan', 'Data User Berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users -> delete();
        return redirect('/users') -> with('pesan', 'Data User Berhasil dihapus');
    }
}