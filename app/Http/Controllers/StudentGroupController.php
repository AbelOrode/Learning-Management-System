<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    public function ViewGroup(){
        $data['allData'] = StudentGroup::all();
        return view('backend.setup.student_group.view_group', $data);
    }

    public function StudentGroupAdd(){
        return view('backend.setup.student_group.add_group');
    }

    public function StudentGroupStore(Request $request){
        $validatedData = $request->validate([
            'name'  =>  'required',
        ]);

        $data = new StudentGroup();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Group Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.group.view')->with($notification);
    }

    public function StudentGroupEdit($id){
        $editData = StudentGroup::find($id);
        return view('backend.setup.student_group.edit_group', compact('editData'));
    }

    public function StudentGroupUpdate(Request $request, $id){
        $data = StudentGroup::find($id);
        $validatedData = $request->validate([
            'name'  =>  'required'
        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Record Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.group.view')->with($notification);
    }

    public function StudentGroupDelete($id){
        $user = StudentGroup::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Record Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('student.group.view')->with($notification);
    }
}
