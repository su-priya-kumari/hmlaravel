<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function showDoctorUpdatePage()
    {
        $records = Doctor::all();
        return view('admin.update_doctor', compact('records'));
    }
}
