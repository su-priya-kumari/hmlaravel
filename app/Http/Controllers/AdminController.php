<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;

class AdminController extends Controller
{
    public function addAdmin()
    {
        return view('admin.add_admin');
    }
    
    public function showAdminUpdatePage()
    {
        $records = Admin::all();
        return view('admin.update_admin', compact('records'));
    }

    public function deleteAdminRecord($id)
    {
        $records = Admin::find($id);
        $records->delete();
        return redirect()->back()->with('message','Deleted Successfully');
    }

    public function editAdminRecord($id)
    {
        $data = Admin::find($id);
        return view('admin.edit_admin',['data'=>$data]);
    }

    public function updateAdminRecord(Request $request)
    {
        $request->validate([
        'email'=>'required|email',
        'password' => 'required|string|min:6|confirmed',
    ]);

        $data = Admin::find($request->id);
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect()->route('updateAdmin')->with('message','Updated Successfully');
    }


}
