<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressValidation;
use Auth;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(AddressValidation $request)
    {
        if (Auth::check() && !Auth::user()->isAdmin())
        {
            Auth::user()->hasAddress()->create($request->all());

            return redirect()->route('payment');
        }
        else
        {

            return redirect()->route('admin.index')->with('admin_not', 'Admin Cannot Not Buy Things!');
            // dd('admin failed');
        }

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
