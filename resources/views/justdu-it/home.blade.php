@extends('justdu-it.temp')

@section('title','home')


@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="jumbotron" style="background-color: white;">
            <h2 style="text-align: center;">View Shoe</h2>
            <div id="item_list">
            @foreach($shoes->chunk(3) as $shoe) 
                <div class="row course-set courses__row">
                    @foreach($shoe as $item)
                    <div class="col-md-4">
                    <img src="{{asset('storage/images/' . $item->image)}}" width="300px" height="200px" alt="no image">
                        <div id="detail">
                            <h5><a href="/detailItem/{{$item->id}}">{{$item->name}}</a></h5>
                            <p>Rp. {{$item->price}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
            </div>
            {{$shoes->links()}}
        </div>
    </div>
@endsection


