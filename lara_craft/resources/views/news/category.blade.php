@extends('layouts.main')

@section('title')
    Category news
@endsection

@section('content')
<div>

    @forelse ($news as $item)

<a href="{{route('news::card', [$item->id])}}">
    {{$item->title}}
</a>
    <p> {{ $item->text }}</p>

    @empty
        <p>Auth</p>

    @endforelse

</div>

@endsection

