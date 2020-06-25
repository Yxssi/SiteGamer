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

              <input id="jeu" name="jeu" class="form-control" value="{{ $game->title }}">

    </div>



    <div class="form-group">


        <div class="input-group">

            <label for="avis">Title</label>
            <input id="title"  name="title" class="form-control" value="{{ $comment->title }}">




        </div>
        <div class="input-group">
            <label for="avis">Avis</label>
            <input type="text" class="form-control" name="avis" id="avis">

        </div>
    </div>

    <div class="bouton">


        <button type="submit" class="btn btn-success">Valider</button>
    </div>
</form>
    </div>
@endsection