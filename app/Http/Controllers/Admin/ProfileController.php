<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'hobby' => 'nullable|string|max:255',
            'introduction' => 'nullable|string|max:500',
        ]);
        
        $profile = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile')->with('status', 'プロフィールを作成しました！');
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
