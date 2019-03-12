@extends('main')

@section('htmlheader_title')
	Animais de Estimação - Cadastrar
@endsection


@section('content')
<div class="container pt-5">
    <h1>Animais de Estimação - Cadastrar</h1>
    <form action="{{ route('animals.store') }}" method="POST">
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="name" >
        </div>
    </form>
</div>
@endsection