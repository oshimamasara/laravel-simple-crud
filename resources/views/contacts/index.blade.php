@extends('base')

<!-- 登録成功時、修正成功時のポップ -->
@section('main')  
<div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div>
    @endif
</div>
<hr>
<div>
    <a style="margin: 15px;" href="{{ route('contacts.create')}}">New contact</a>
</div>
<hr>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">登録内容</h1>    
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>名前</td>
                    <td>メール</td>
                    <td>職業</td>
                    <td>市町村</td>
                    <td>国</td>
                    <td colspan = 2>変更</td>
                </tr>
            </thead>
            <tbody>
                  @foreach($contacts as $contact)
                  <tr>
                        <td>{{$contact->id}}</td>
                        <td>
                            <a href="{{ route('contacts.show',$contact->id)}}">{{$contact->first_name}} {{$contact->last_name}}</a>
                        </td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->job_title}}</td>
                        <td>{{$contact->city}}</td>
                        <td>{{$contact->country}}</td>
                        <td>
                            <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">変更</a>
                        </td>
                        <td>
                            <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">削除</button>
                            </form>
                        </td>
                  </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
</div>
<hr>

@endsection
