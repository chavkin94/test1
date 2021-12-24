@extends('layouts.app')

@section('title-block') Главная страница @endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur dignissimos ex itaque omnis. Doloremque hic maiores molestiae nemo officiis quas quidem repellendus repudiandae ullam, voluptatibus! Dolorem nihil sequi suscipit.</p>
@endsection

@section('aside')
    @parent
        <p>Дополнительный текст</p>
@endsection
