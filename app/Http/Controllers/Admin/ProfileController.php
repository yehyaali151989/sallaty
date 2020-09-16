<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $admin = Admin::find(auth('admin')->user()->id);

        return view('admin.pages.profile.edit', compact('admin'));
    }

    public function updateProfile(ProfileRequest $request)
    {
        try {

            $admin = Admin::find(auth('admin')->user()->id);

            if ($request->filled('password')) {

                $request->merge(['password' => bcrypt($request->password)]);
            } else {
                unset($request['password']);
                unset($request['password_confirmation']);
            }

            unset($request['id']);

            $fileName = "";
            if ($request->has('photo')) {

                $fileName = uploadImage('admins', $request->photo);
                $admin->photo = $fileName;
            } else {
                unset($request['photo']);
            }

            $admin->update($request->all());

            $admin->save();

            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);
        }
    }
}
