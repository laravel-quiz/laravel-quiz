<?php

namespace App\Http\Controllers;

use App\Services\UsersServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\User;
use App\Role;
use Gate;


class UserController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $usersServices;
    public function __construct(UsersServices $usersServices)
    {
        $this->usersServices = $usersServices;
    }
    public function index()
    {
        $users = $this->usersServices->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('create-user'))
        {
            return redirect(route('users.index'));
        }
        $roles = Role::get();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => ['required', 'alpha', 'max:50'],
        'email' => ['required', 'email', 'max:255','unique:App\User'],
        'password' => ['required', 'string', 'min:8'],
        'image' => ['image', 'mimes:jpg,png,jpeg','max:2048']
        ]);

        if($this->usersServices->store($request->all()))
        {
            return redirect()->route('users.index')->with('success','User added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::findOrfail($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            if(Gate::denies('edit-user'))
            {
                return redirect(route('users.index'));
            }
            $user = User::findOrfail($id);
            $roles = Role::get();
            return view('admin.users.edit',compact('user','roles'));
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
        if(Gate::denies('edit-user'))
        {
            return redirect(route('users.index'));
        }
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'role_id' => ['required', 'numeric'],
            'image' => ['image', 'mimes:jpg,png,jpeg','max:2048']
        ]);
        if($this->usersServices->update($request->only('name','email','image','role_id'),$id))
        {
            return redirect()->route('users.index')->with('success','User Updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('edit-user'))
        {
            return redirect(route('users.index'));
        }
        if($this->usersServices->destroy($id))
        {
            return redirect()->route('users.index')->with('success','User Deleted successfully');
        }
    }
}
