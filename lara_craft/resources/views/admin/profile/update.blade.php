@extends('layouts.main')

@section('title')
    Профиль Админа
@endsection

@section('content')
    <div class="col-md-6">
        <h1>Профиль пользователя</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form action="{{route('admin:profile')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Имя</label>
                <input class="form-control" type="text" name="name"
                value="{{$user->name ?? old('name')}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email"
                       value="{{$user->email ?? old('email')}}">
            </div>
            <div class="form-group">
                <label>Новый пароль</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <label>Текущий пароль</label>
                <input class="form-control" type="password" name="current_password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
@endsection
