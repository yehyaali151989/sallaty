<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeRequest;

class AttributesController extends Controller
{
    public function index()
    {
        $attributes = Attribute::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('admin.pages.attributes.index', compact('attributes'));
    }

    public function create()
    {
        return view('admin.pages.attributes.create');
    }

    public function store(AttributeRequest $request)
    {

        DB::beginTransaction();
        $attribute = Attribute::create([]);

        //save translations
        $attribute->name = $request->name;
        $attribute->save();
        DB::commit();
        return redirect()->route('admin.attributes')->with(['success' => 'تم ألاضافة بنجاح']);
    }

    public function edit($id)
    {

        $attribute = Attribute::find($id);

        if (!$attribute)
            return redirect()->route('admin.attributes')->with(['error' => 'هذا العنصر  غير موجود ']);

        return view('admin.pages.attributes.edit', compact('attribute'));
    }

    public function update($id, AttributeRequest $request)
    {
        try {
            //validation

            //update DB
            $attribute = Attribute::find($id);

            if (!$attribute)
                return redirect()->route('admin.attributes')->with(['error' => 'هذا العنصر غير موجود']);


            DB::beginTransaction();

            //save translations
            $attribute->name = $request->name;
            $attribute->save();

            DB::commit();
            return redirect()->route('admin.attributes')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.attributes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
