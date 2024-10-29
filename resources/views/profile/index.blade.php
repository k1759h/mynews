@extends('layouts.app')

@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <h2>プロフィール情報</h2>
        
        @if ($profile)
            <p><strong>名前:</strong>{{ $profile->name }}</p>
            <p><strong>性別:</strong>{{ $profile->gender }}</p>
            <p><strong>趣味:</strong>{{ $profile->hobby }}</p>
            <p><storng>自己紹介</storng>{{ $profile->introduction }}</p>
        @else
            <p>プロフィール情報がありません。</p>
        @endif
    </div>
@endsection