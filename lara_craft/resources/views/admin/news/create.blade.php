
@extends('layouts.main')

@section('title')
    @parent
    Создание новостей
@endsection

@section ('content')
    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif
        <div class="col-md-6">
            <h1>Create news</h1>
        {!! Form::open(['route' => "admin::news::save"]) !!}

            @if($model->id)
                <input type="hidden" name="id" value="{{ $model->id}}">
            @endif
            <div class="form-group">
        <label>
            Title
        </label>
                @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
        <div class="form-group">
            {!! Form::text("title", $model->title ?? old('title'),  ['class' => 'form-control']) !!}
        </div>
            <div class="form-group">
        <label>
            Description
        </label>
            {!! Form::textarea("content",$model->content ?? old('content') ??"", ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">
            <label>Category</label>
           {!!Form::select("category_id", $categories, $model->category_id, ['class'=> 'form-control'])!!}

        </div>
<div class="form-group">
    <input type="hidden" name="active" value="0">
    <label>
        {!! Form::checkbox("active", 1, $model->active) !!}

        Active
    </label>
</div>
            <div class="form-group">
                <label>Publish Date</label>
                {!! Form::date(
                    'publish_date',
                     $model->publish_date ?? old('publish_date'),
                     ['dataformatas' => 'Y-m-d',  'class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        {!! Form::close() !!}
    </div>
    </div>

@endsection
