@extends('justdu-it.temp')

@section('title','updateShoe')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        @foreach($shoe as $head)
            @if($cart->item_id == $head->id)
            <div class="card flex-row flex-wrap">
                <div class="card-header border-0">
                    <img src="{{asset('storage/images/' . $head->image)}}" width="300px" height="200px" alt="image">
                </div>
                <div class="card-block px-2">
                    <h4 class="card-title">Name : {{$head->name}}</h4>
                    <h4 class="card-title">Rp. {{$head->price}}</h4>
                    <h4 class="card-title">{{$head->description}}</h4>
                </div>
            </div>
            @endif
        @endforeach
        <form action="/updateCart/{{$cart->id}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control">
                @error('quantity')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" value="updateCart" class="btn btn-primary">Update Shoe</button>
            <a class="btn btn-link" href="/delCart/{{$cart->id}}" role="button">Delete</a>
        </form>
    </div>
@endsection