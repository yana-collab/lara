@extends('layouts.main')

@section('title')
    Новости
@section('content')
    <div>
        <div>
           <h1>
            {{$item -> title}}
           </h1>
        </div>
        <div>
            <p>
            {{$item-> content}}
            </p>
        </div>
    </div>
@endsection
