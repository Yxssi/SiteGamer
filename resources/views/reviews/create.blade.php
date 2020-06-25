@extends('layouts.master')

@section('content')
    <div class="formulaire">
<h1 class="display-4">Rédiger un avis</h1>
<form method="POST" action="{{ route('reviews.store') }}">
    @csrf
    <input type="hidden" id="jeu" name="jeu" class="form-control" value="{{ $comment->product_id }}">

    <h2></h2>



    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Rédiger un avis pour le jeu ci-dessous :</span>
        </div>

              <input id="game" name="game" class="form-control" value="{{ $game->title }}">
        <input type="hidden" id="g" name="jeu" class="form-control" value="{{ $game->id }}">

    </div>


    <style>
        .form-group{
            margin-top: 5%;
        }
    </style>

    <div class="form-group">


        <div class="input-group">


            <p class="text-justify">Titre</p>
        </div>
        <div class="input-group">
            <input id="title"  name="title" class="form-control" value="{{ $comment->title }}">
        </div>




        </div>
        <div class="input-group">
            <p class="text-justify">Avis</p>
        </div>
    <div class="input-group">
            <input id="avis"  name="avis" class="form-control" value="{{ $comment->body }}">


    </div>

    <div class="bouton">


        <button type="submit" class="btn btn-success">Valider</button>
    </div>
</form>
    </div>
@endsection