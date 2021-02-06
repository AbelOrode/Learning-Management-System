<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function UserView(){
        $data['allData'] = User::all();
       return view('backend.user.view_user', $data);
    }

    public function UserAdd(){
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){
        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $data->userType = $request->userType;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->userType);

        $data->save();

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function UserEdit($id){
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){
        $data = User::find($id);
        $data->userType = $request->userType;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->userType);

        $data->save();

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function UserDelete($id){
        $userData = User::findOrFail($id);
        $userData->delete();

        $notification = array(
            'message' => 'User deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }
}
