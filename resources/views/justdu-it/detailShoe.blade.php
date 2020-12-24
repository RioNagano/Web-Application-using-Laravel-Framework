@extends('justdu-it.temp')

@section('title','detailShoe')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="{{asset('storage/images/' . $shoes->image)}}" width="300px" height="200px" alt="image">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title">Name : {{$shoes->name}}</h4>
                <p class="card-text">Price : Rp. {{$shoes->name}}</p>
                <p class="card-text">Description : </p>
                <p class="card-text">{{$shoes->description}}</p>
                @auth
                    @if(auth()->user()->role == 'member')
                        <h7><a href="/addCart/{{$shoes->id}}">Add to Cart</a></h7>
                    @elseif(auth()->user()->role == 'admin')
                        <h7><a href="/updateShoe/{{$shoes->id}}">Update Shoe</a></h7>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection