
@extends('layouts.main')

@section('title')
    @parent
    Создание новостей
@endsection

@section ('content')
    <div>
        {!! Form::open(['route' => 'admin::news::create']) !!}

        <label>
            Заголовок
        </label>
        <div class="form-group">
            {!! Form::text('title', '', ['class' => 'form-control']) !!}

        </div>
        <label>
            Содержимое
        </label>
        <div class="form-group">
            {!! Form::textarea('content', '', ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('send', ['class' => 'btn btn-success']) !!}

        </div>


        {!! Form::close() !!}
    </div>
@endsection
