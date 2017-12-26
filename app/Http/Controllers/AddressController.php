<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AddressController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'address' => 'required',
            'city'  => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'country' => 'required',
            'phone' => 'required|integer',
        ]);

        //
        if (Auth::check() && !Auth::user()->isAdmin()) {
            Auth::user()->hasAddress()->create($request->all());
            //redirect to a thank you page
            return redirect()->route('thanks');
        }else{
            // dd('admin failed');
            return redirect()->route('admin.index')->with('admin_not','Admin Cannot Not Buy Things!');
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
