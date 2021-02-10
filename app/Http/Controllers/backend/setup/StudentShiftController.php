<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use App\Models\StudentShift;
use Illuminate\Http\Request;

class StudentShiftController extends Controller
{
    public function ViewShift(){
        $data['allData'] = StudentShift::all();
        return view('backend.setup.student_shift.view_shift', $data);
    }

    public function StudentShiftAdd(){
        return view('backend.setup.student_shift.add_shift');
    }

    public function StudentShiftStore(Request $request){
        $validatedData = $request->validate([
            'name'  =>  'required',
        ]);

        $data = new StudentShift();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Shift Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.shift.view')->with($notification);
    }

    public function StudentShiftEdit($id){
        $editData = StudentShift::find($id);
        return view('backend.setup.student_shift.edit_shift', compact('editData'));
    }

    public function StudentShiftUpdate(Request $request, $id){
        $data = StudentShift::find($id);
        $validatedData = $request->validate([
            'name'  =>  'required'
        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Shift Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('student.shift.view')->with($notification);
    }

    public function StudentShiftDelete($id){
        $user = StudentShift::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Record Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('student.shift.view')->with($notification);
    }
}
