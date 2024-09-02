<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlofileController extends Controller
{
    //
    public function add()
    {
        return view('admin.plofile.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/plofile');
    }
    public function edit($id)
    {
        return view ('admin.plofile.edit');
    }
    public function update(Request $request, $id)
    {
        return redirect('admin/plofile');
    }
}
