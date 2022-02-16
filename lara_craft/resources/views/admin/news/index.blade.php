@extends('layouts.main')

@section('title')
    @parent
    Создание новостей
@endsection

@section ('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>News</h1>
            <p>
                <a class="btn btn-success" href="{{ route("admin::news::create") }}">
                    Create news
                </a>
            </p>
            <div class="list-group">
                @forelse( $news as $item )
                    <div href="#" class="list-group-item">
                        <h2>{{$item->title}}</h2>
                        <p>
                            <a class="btn btn-primary" href="{{ route("admin::news::update", ['news'=> $item -> id]) }}">
                                Change
                            </a>
                            <a class="btn btn-danger" href="{{ route("admin::news::delete", ['id'=> $item -> id]) }}">
                               Delete
                            </a>
                        </p>
                    </div>
                @empty
                News not found
                @endforelse
            </div>
            <hr>
            <div class="row justify-content-center">
                {{$news->links()}}
            </div>
        </div>
    </div>
@endsection
