<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Http\Requests\GeneralProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['brands']  = Brand::active()->select('id')->get();
        $data['tags']  = Tag::select('id')->get();
        $data['categories']  = Category::active()->select('id')->get();

        return view('admin.pages.products.general.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralProductRequest $request)
    {
        // try {

        //     // DB::beginTransaction();

        //     //validation

        //     if (!$request->has('is_active'))
        //         $request->request->add(['is_active' => 0]);
        //     else
        //         $request->request->add(['is_active' => 1]);

        //     //if user choose main category then we must remove paret id from the request

        //     if ($request->type == CategoryType::mainCategory) //main category
        //     {
        //         $request->request->add(['parent_id' => null]);
        //     }

        //     //if he choose child category we mus t add parent id


        //     $category = Category::create($request->except('_token'));

        //     //save translations
        //     $category->name = $request->name;
        //     $category->save();

        //     return redirect()->route('main_categories.index')->with(['success' => 'تم ألاضافة بنجاح']);
        //     // DB::commit();
        // } catch (\Exception $ex) {
        //     // DB::rollback();
        //     return redirect()->route('main_categories.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
