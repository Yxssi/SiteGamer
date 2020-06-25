@extends('layouts.master')

@section('content')


@section('content')
  <div class="col-md-12">


    <h5>  <title>  {{ $product->title }} </title> </h5>
    <img src="{{ $product->image }}" alt="" width="10%">
    <rect width="100%" height="100%" fill="#777"/></svg>
    <h4>{{ $product->title }}</h4>
    <p>{{$product->subtitle}}</p>
    <strong class="mb-auto"> {{ $product->getPrice() }}</strong>
    <form action="{{route('cart.store')}}" method="POST">
      @csrf

      <input type="hidden" name="id" value="{{ $product->id }}">
      <input type="hidden" name="title" value="{{ $product->title }}">
      <input type="hidden" name="price" value="{{ $product->price }}">

      <button type="submit" class="btn btn-dark">Ajouter au panier</button>


    </form>


  </div>




  </div>
  </div>
  </div>
  </div>








         {{-- @foreach ($comment as $product)

            {{ $product->title }}{{ $loop->last ? '' : ', '}}
          @endforeach

          --}}









      </div>


    </div>


  </div>
@endsection

@section('extra-js')

  {{--
  <script>
    var mainImage = document.querySelector('#mainImage');
    var thumbnails = document.querySelectorAll('.img-thumbnail');

    thumbnails.forEach((element) => element.addEventListener('click', changeImage));

    function changeImage(e) {
      mainImage.src = this.src;
    }
  </script>

  --}}
@endsection
