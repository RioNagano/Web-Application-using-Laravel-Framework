@extends('justdu-it.temp')

@section('title','addCart')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h2 style="text-align: center;">Add To Cart</h2>
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="{{asset('storage/images/' . $shoes->image)}}" width="300px" height="200px" alt="image">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title">{{$shoes->name}}</h4>
                <h4 class="card-title">Rp. {{$shoes->price}}</h4>
                <h4 class="card-title">{{$shoes->description}}</h4>
            </div>
        </div>
        <form action="{{Route('addCart')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Quantity</label>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="item_id" value="{{$shoes->id}}">
                <input type="number" name="quantity" class="form-control" style="width: 340px;">
                @error('quantity')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" value="addCart" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
@endsection