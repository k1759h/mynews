<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

 
  public function add()
{
    return view('admin.profile.create'); // フォームの表示
}

  public function create(Request $request)
{
    // バリデーションの追加など
    $this->validate($request, Profile::$rules);

    $profile = new Profile;
    $form = $request->all();
    
    unset($form['_token']);
    
    // フォームデータを保存
    $profile->fill($form);
    $profile->save();


    return redirect('admin/profile/create');
}

    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        
        if (empty($profile)) {
        abort(404);
        }
        
        return view ('admin.profile.edit', ['profile_form' => $profile]);
    }
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        
        return redirect()->route('admin.profile.edit');
    }
}
