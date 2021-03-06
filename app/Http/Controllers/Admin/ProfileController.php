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

            // $file_extension = $request->photo->getClientOriginalExtension();

            // $file_name = time() . '.' . $file_extension;

            // $path = 'admin/uploads';

            // $request->photo->move($path, $file_name);

            if ($request->filled('password')) {

                $request->merge(['password' => bcrypt($request->password)]);
            }

            unset($request['id']);
            unset($request['password_confirmation']);


            $admin->update($request->all());

            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);
        }
    }
}
