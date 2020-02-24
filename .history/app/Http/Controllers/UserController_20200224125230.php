<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\User;
use App\Role;

class UserController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
        'name' => ['required', 'string', 'max:50'],
        'email' => ['required', 'email', 'max:255','unique:App\User'],
        'password' => ['required', 'string', 'min:8'],
        'image' => ['image', 'mimes:jpg,png,jpeg','max:2048']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $random_name = md5(rand().time().rand());
            $new_name = $random_name . '.'. $image->getClientOriginalExtension();
            $avatar = Image::make($image)->resize(100,100);
            $image->move(public_path('images/users'),$new_name);
            $avatar->save(public_path('images/users/avatar/'.$new_name));
            $avatar->save();
            $user->image = $new_name;
        }

        $user->save();
        return redirect()->route('users.index');
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
        $user = User::findOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'role_id' => ['required', 'numeric'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg','max:2048']
        ]);

        $img_path = public_path('images/users/'.$user->image);
        $img_avatar_path = public_path('images/users/avatar/'.$user->image);

        if($request->hasFile('image')){
            if(file_exists($img_path) && file_exists($img_avatar_path))
            {
                unlink($img_path);
                unlink($img_avatar_path);
            }else{
                $image = $request->file('image');
                $random_name = md5(rand().time().rand());
                $new_name = $random_name . '.'. $image->getClientOriginalExtension();
                $avatar = Image::make($image)->resize(100,100);
                $image->move(public_path('images/users'),$new_name);
                $avatar->save(public_path('images/users/avatar/'.$new_name));
                $avatar->save();
                $user->image = $new_name;
            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $img_path = public_path('images/users/'.$user->image);
        $img_avatar_path = public_path('images/users/avatar/'.$user->image);
        if(file_exists($img_path) && file_exists($img_avatar_path) && $user->image !=null)
        {
            unlink($img_path);
            unlink($img_avatar_path);
        }

        $user->delete();
        return redirect()->route('users.index');
    }
}
