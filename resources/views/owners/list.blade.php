@extends('main')

@section('htmlheader_title')
	Donos dos Animais
@endsection


@section('content')
<div class="container pt-5">
    <a href="{{ route('owners.create') }}" class="btn btn-primary float-right">Novo <i class="fa fa-plus"></i></a>
    <h1>Donos dos Animais</h1>
</div>
@endsection