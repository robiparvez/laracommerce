<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));

    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.products.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
            'size'        => 'required',
            'image'       => 'image|mimes:jpg,jpeg,png|max:10000',

        ]);

        //Handling Image
        $form_input = $request->except('image');
        $image_init = $request->image;
        if ($image_init)
        {
            $image_name = $image_init->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $image_init = $image_init->move($destinationPath, $image_name);
            $form_input['image'] = $image_name;
        }
        Product::create($form_input);

        return redirect()->route('products.index')->with('created', 'Products Successfully Created!');
    }

    public function show($id)
    {

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
