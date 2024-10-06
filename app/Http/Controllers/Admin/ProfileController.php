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

    return redirect('admin/profile/create')->with('status', 'プロフィールが作成されました！');
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
