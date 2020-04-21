@extends('layouts.profile')
@section('title','MYプロフィール')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            
            <div class="ml-auto mb-3">
            <a href="{{ action('Admin\ProfileController@edit')}}" role="button" class="btn btn-primary">編集</a>
            </div>
            <div class="row">
                <table class="table table-dark">
                    <tr>
                        <th width="20%">氏名</th>
                        <td width="80%">{{ $latest_prof->name }}</td>
                    </tr>
                    <tr>
                        <th width="20%">性別</th>
                        <td width="80%">{{ $latest_prof->gender }}</td>
                    </tr>
                    <tr>
                        <th width="20%">趣味</<th>
                        <td width="80%">{{ $latest_prof->hobby }}</td>
                    </tr>
                    <tr>
                        <th width="20%">自己紹介</th>
                        <td width="80%">{{ $latest_prof->introduction }}</td>
                    </tr>
                </table>
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection