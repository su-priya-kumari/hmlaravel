<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Admin;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:doctor');
        $this->middleware('guest:patient');
    }

    public function showAdminRegisterForm()
    {
        // return view('auth.register', ['url' => 'admin']);
        return view('admin.add_admin', ['url' => 'admin']);
    }

    public function showDoctorRegisterForm()
    {
        return view('admin.add_doctor', ['url' => 'doctor']);
    }

    public function showPatientRegisterForm()
    {
        return view('auth.patient-register', ['url' => 'patient']);
    }

    protected function createAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        Admin::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('message','Add Successfully');
    }

    protected function createDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors',
            'password' => 'required|string|min:6|confirmed',
        ]);
        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/doctor');
    }

    protected function createPatient(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'contact' => 'required',
            'address' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required|string|email|max:255|unique:patients',
            'password' => 'required|string|min:6|confirmed',
        ]);
        Patient::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contact' => $request->contact,
            'address' => $request->address,
            'age' => $request->age,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/patient');
    }
}
