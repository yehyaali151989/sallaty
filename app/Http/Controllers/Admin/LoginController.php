<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    // public function savAdmin() 
    // {
        // $admin = new App\Models\Admin;
        // $admin->name = "Yehya Ali";
        // $admin->email = "yehyaali151989@gmail.com";
        // $admin->password = bcrypt("123123123");
        // $admin->save();
    // }
    public function login()
    {
        return view('admin.pages.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->route('admin.dashboard');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => "These credentials do not match our records."]);
    }

    public function logout() 
    {
        $gaurd = $this->getGaurd();

        $gaurd->logout();

        return redirect()->route('admin.login')->with(['success' => 'Logout Successfuly!']);
    }

    private function getGaurd() 
    {
        return auth('admin');
    }
}
