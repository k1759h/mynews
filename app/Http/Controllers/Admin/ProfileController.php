<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/profile');
    }
    public function edit(Request $request)
    {
        return view ('admin.profile.edit');
    }
    public function update(Request $request, $id)
    {
        return redirect('admin/profile');
    }
}