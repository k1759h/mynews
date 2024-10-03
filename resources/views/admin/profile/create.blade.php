<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="view-port" content="width=device-width,initial-scale=1">
        
        <title>Create Profile</title>
        @section('title' 'プロフィール新規作成')
        @endsection
    </head>
    <body>
        <h1>プロフィール作成ページ</h1>
        
    @section('content')
        <div class="container">
          <div class="row">
             <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
                
                @if ($errors->any())
                 <div class="alert alert-danger">
                   <ul>
                     @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                     @endforeach
                   </ul>
                  </div>
                @endif

                
                <form action="{{ action('Admin/ProfileController@create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">氏名</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                     <div class="form-group">
                        <label for="gender">性別</label>
                        <select class="form-control" name="gender">
                            <option value="male">男性</option>
                            <option value="female">女性</option>
                            <option value="other">その他</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hobby">趣味</label>
                        <input type="text" class="form-control" name="hobby" varue="{{ old('hobby') }}">
                    </div>
                    <div class="form-group">
                        <label for="introduction">自己紹介欄</label>
                        <textarea class="form-control" name="introduction" rows="5">{{ old('introduction') }}</textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" varue="作成">
                </form>
             </div>
          </div>
        </div>
    @endsection    
        
    </body>
</html>