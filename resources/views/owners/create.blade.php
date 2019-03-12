@extends('main')

@section('htmlheader_title')
	Donos dos Animais - Cadastrar
@endsection


@section('content')
<div class="container pt-5">
    <h1>Donos dos Animais - Cadastrar</h1>
    <form action="{{ route('owners.store') }}" method="POST">
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="name" >
        </div>
    </form>
</div>
@endsection