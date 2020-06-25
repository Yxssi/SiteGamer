@extends('layouts.master')

@section('content')
    <div class="formulaire">
<h1 class="display-4">Rédiger un avis</h1>
<form method="POST" action="{{ route('reviews.store') }}">
    @csrf
    <input type="hidden" id="jeu" name="jeu" class="form-control" value="{{ $comment->product_id }}">
    <input id="jeu" name="jeu" class="form-control" value="{{ $game->id }}">


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
        <button type="submit" class="btn">Submit</button>
        <button type="submit" class="btn">Valider</button>
    </div>
</form>
    </div>
@endsection