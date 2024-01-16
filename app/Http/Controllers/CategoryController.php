<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index',[
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:categories,name'
        ],[
            'name.required'=>'category name is required',
            'name.unique'=>'this category name already have',
        ]);

        Category::addCategory($request);
        return back()->with('message','add category Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',[
            'category'=>Category::find($category->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        Category::updateCategory($request,$category->id);
        return redirect('category')->with('message',('Update'.' '.$category->name.' '.'Course Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::deleteCategory($category->id);
        return back()->with('message',('Delete'.' '.$category->name.' '.'Category Successfully'));
    }
}
