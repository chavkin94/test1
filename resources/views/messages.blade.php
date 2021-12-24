@extends('layouts.app')

@section('title-block') Сообщения @endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
        </div>
    @endforeach
@endsection
