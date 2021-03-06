@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <h1>Edit Post</h1>
            {!! Form::open(['action' => ['PostController@update', $post -> id],'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post -> title ,['class'=>'form-control', 'placeholder'=>'title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'post')}}
                    {{ Form::textarea('body', $post -> body ,['class'=>'form-control', 'placeholder'=>'body text'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </section>
@endsection
