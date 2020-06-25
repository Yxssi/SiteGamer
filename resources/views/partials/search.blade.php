<form action="{{ route('products.search') }}" class="d-flex mr-3">
    <div class="form-group mb-0 mr-1">

    </div>



    <div class="input-group mb-3">

        <button type="submit" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>

        <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}">
    </div>


</form>
