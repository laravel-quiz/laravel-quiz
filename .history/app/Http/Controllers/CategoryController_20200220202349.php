<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Services\CategoryServices;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CategoryServices $categoryServices)
    {
        $this->categoryServices = $categoryServices;
    }
    public function index()
    {
        $categories = $this->categoryServices->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //without service
        // $category = new Category();
        // $category->name = $request->name;
        // $category->save();
        // return redirect()->route('category');
        //with services 
        $request->validate([
            'name' =>'required',
        ]);
        if($this->categoryServices->store($request->all()))
        {
            return redirect()->route('category')->with('success','Category successfull added');
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
        //$category = Category::findOrfail($id);
        //return view('admin.category.edit',compact('category'));
        $category = $this->categoryServices->getById($id);
        return view('admin.category.edit',compact('category'));
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
        // $category = Category::findOrfail($id);
        // $category->name = $request->name;
        // $category->save();
        // return redirect()->route('category');
        $request->validate([
            'name' => 'required',
        ]);
        if($this->categoryServices->update($request->all(),$id))
        {
            return redirect()->route('category');
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
        // $category = Category::findOrfail($id);
        // $category->delete();
        // return redirect()->route('category');
        if($this->categoryServices->destroy($id)){
            return redirect()->route('category');
        }
    }
}
