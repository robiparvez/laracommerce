<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact(['categories', 'products']));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index')->with('create_cat', 'Category Successfully Created!!');
    }

    public function show($id)
    {
        // One to many Relationhsip -- possible in show() only by find($id), not in index
        $products_rel = Category::find($id);
        return view('admin.categories.show', compact('products_rel'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
