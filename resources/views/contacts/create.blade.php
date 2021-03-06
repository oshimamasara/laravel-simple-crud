@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">追加</h1>
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br>
            @endif
            <form method="post" action="{{ route('contacts.store') }}">
                @csrf
                <div class="form-group">    
                    <label for="first_name">苗字:</label>
                    <input type="text" class="form-control" name="first_name"/>
                </div>

                <div class="form-group">
                    <label for="last_name">名前:</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>

                <div class="form-group">
                    <label for="email">メール:</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="city">市町村:</label>
                    <input type="text" class="form-control" name="city"/>
                </div>
                <div class="form-group">
                    <label for="country">国:</label>
                    <input type="text" class="form-control" name="country"/>
                </div>
                <div class="form-group">
                    <label for="job_title">職業:</label>
                    <input type="text" class="form-control" name="job_title"/>
                </div> 
                <button type="submit" class="btn btn-primary">登録</button>
            </form>
        </div>
    </div>
</div>
@endsection