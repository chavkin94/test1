@extends('layouts.app')

@section('title-block') Контакты @endsection

@section('content')
    <h1>Контакты</h1>




    <form action="{{ route('contact-form') }}" method="post">
        @csrf{{--        ларавелевский ключ--}}
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" placeholder="Введите имя" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject"></label>
            <input type="text" name="subject" placeholder="Введите имя" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message"></label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success"> Отправить</button>
    </form>

@endsection
