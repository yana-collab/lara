@extends('layouts.main')

@section('title')
    Категории
@endsection

@section('content')
    <div>
        @forelse($news as $item)
            <div>
                <a href="{{route('news::category', [$item->category_id])}}">
                    {{$item -> title}}
                </a>
            </div>
        @empty
            Категорий нет
        @endforelse
    </div>

@endsection
