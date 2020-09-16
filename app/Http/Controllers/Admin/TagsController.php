<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('admin.pages.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {

        DB::beginTransaction();

        //validation
        $tag = Tag::create(['slug' => $request->slug]);

        //save translations
        $tag->name = $request->name;
        $tag->save();
        DB::commit();
        return redirect()->route('tags.index')->with(['success' => __('mine.Added Successfuly.')]);
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

        $tag = Tag::find($id);

        if (!$tag)
            return redirect()->route('tags.index')->with(['error' => __('mine.This Element Does not Exist')]);

        return view('admin.pages.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, TagRequest  $request)
    {
        try {

            $tag = Tag::find($id);

            if (!$tag)
                return redirect()->route('tags.index')->with(['error' => __('mine.This Element Does not Exist')]);

            DB::beginTransaction();


            $tag->update($request->except('_token', 'id'));  // update only for slug column

            //save translations
            $tag->name = $request->name;
            $tag->save();

            DB::commit();
            return redirect()->route('tags.index')->with(['success' => __('mine.Udpated Successfuly.')]);
        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('tags.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
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
            $tags = Tag::find($id);

            if (!$tags)
                return redirect()->route('tags.index')->with(['error' => __('mine.This Element Does not Exist')]);

            $tags->delete();

            return redirect()->route('tags.index')->with(['success' => __('mine.Deleted Successfuly.')]);
        } catch (\Exception $ex) {
            return redirect()->route('tags.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
