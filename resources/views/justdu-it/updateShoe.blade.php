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
        <h2 style="text-align: center;">Edit Shoe</h2>
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="{{asset('storage/images/' . $shoes->image)}}" width="300px" height="200px" alt="image">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title">{{$shoes->name}}</h4>
                <h4 class="card-title">{{$shoes->price}}</h4>
                <h4 class="card-title">{{$shoes->description}}</h4>
            </div>
        </div>
        <form action="/updateShoe/{{$shoes->id}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Shoe Name</label>
                <input type="text" name="name" class="form-control" placeholder="{{$shoes->name}}">
                @error('name')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control" placeholder="{{$shoes->price}}">
                @error('price')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="{{$shoes->description}}">
                @error('description')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">
                @error('image')
                    <div class="error" style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" value="editShoe" class="btn btn-primary">Update Shoe</button>
        </form>
    </div>
@endsection