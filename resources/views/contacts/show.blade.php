@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">登録内容の確認</h1>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID： {{$contact->id}}</li>
            <li class="list-group-item">名前： {{$contact->first_name}} {{$contact->last_name}}</li>
            <li class="list-group-item">メール： {{$contact->email}}</li>
            <li class="list-group-item">職業： {{$contact->job_title}}</li>
            <li class="list-group-item">住所： {{$contact->city}} （{{$contact->country}}）</li>
        </ul>
    </div>
</div>
<hr>
<a href="{{ route('contacts.index')}}">もどる</a>
@endsection
