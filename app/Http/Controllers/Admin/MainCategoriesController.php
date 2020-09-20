<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;

class MainCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::with('_parent')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('admin.pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =   Category::select('id', 'parent_id')->get();
        return view('admin.pages.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainCategoryRequest $request)
    {
        try {

            // DB::beginTransaction();

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);
            } else {
                $request->request->add(['is_active' => 1]);
            }

            //if user choose main category then we must remove paret id from the request

            if ($request->type == 1) //main category
            {
                $request->request->add(['parent_id' => null]);
            }

            $category = Category::create($request->except('_token'));


            //save translations
            $category->name = $request->name;
            $category->save();

            return redirect()->route('main_categories.index')->with(['success' => __('mine.Added Successfuly.')]);
            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            return redirect()->route('main_categories.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('main_categories.index')->with(['error' => __('mine.This Element Does not Exist')]);
        }

        return view('admin.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MainCategoryRequest $request, $id)
    {
        try {
            $category = Category::orderBy('id', 'DESC')->find($id);

            if (!$category)
                return redirect()->route('main_categories.index')->with(['error' => __('mine.This Element Does not Exist')]);

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);
            } else {
                $request->request->add(['is_active' => 1]);
            }

            $category->update($request->all());

            //save translations
            $category->name = $request->name;
            $category->save();

            return redirect()->route('main_categories.index')->with(['success' => __('mine.Udpated Successfuly.')]);
        } catch (\Exception $ex) {

            return redirect()->route('main_categories.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $category = Category::find($id);

            if (!$category) {
                return redirect()->route('main_categories.index')->with(['error' => __('mine.This Element Does not Exist')]);
            }
            $category->delete();
            return redirect()->route('main_categories.index')->with(['success' => __('mine.Deleted Successfuly.')]);
        } catch (\Exception $ex) {
            return redirect()->route('main_categories.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
