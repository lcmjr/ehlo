@extends('includes.principal')

@section('title', '- Como Fazemos')
@section('classe-pg', 'page-como-fazemos')
@section('conteudo')
    <div class="central">
        @foreach($textos as $texto)
            <div class="texto">
            </div>
        @endforeach
    </div>
    @include('includes.chamada-fale-conosco')
@stop