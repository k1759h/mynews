<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ProfileHistory;
use Carbon\Carbon;

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
    public function update(Request $request)
    {
        $profile = Profile::find($request->id);
        
        $form = $request->all();
        
        $history = new ProfileHistory();
        $history->profile_id = $profile->id;
        $history->name = $profile->name;
        $history->gender = $profile->gender;
        $history->hobby = $profile->hobby;
        $history->introduction = $profile->introduction;
        $history->edited_at = Carbon::now();
        $history->save();
        
        unset($form['_token']);
        $profile->fill($form);
        $profile->save();
        
        return redirect()->route('admin.profile.edit');
    }
    public function index()
    {
        $profiles = Profile::all();
        
        return view ('admin.profile.index', ['profiles' => $profiles]);
    }
}
