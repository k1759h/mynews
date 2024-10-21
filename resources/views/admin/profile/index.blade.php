@extends('layouts.admin')

@section('title', 'プロフィール一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>氏名</th>
                                <th>性別</th>
                                <th>趣味</th>
                                <th>自己紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $profile)
                                <tr>
                                    <td>{{ $profile->id }}</td>
                                    <td>{{ $profile->name }}</td>
                                    <td>{{ $profile->gender }}</td>
                                    <td>{{ $profile->hobby }}</td>
                                    <td>{{ $profile->introduction }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
