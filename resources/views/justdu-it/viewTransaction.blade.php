@extends('justdu-it.temp')

@section('title','viewTransaction')


@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="jumbotron" style="background-color: white;">
            <h2 style="text-align: center;">View All Transaction</h2>
            <br>
            <br>
            @auth
                @if(auth()->user()->role == 'member')
                    @foreach($tr as $t)
                    <div class="row course-set courses__row" style="margin-bottom: 100px;">
                        <div id="status">
                            <div id="date">
                                <h5>{{$t->created_at}}</h5>
                            </div>
                            <div id="total">
                                <h5>Total Rp. {{$t->total}}</h5>
                            </div>
                        </div>
                        @foreach($dts as $d)
                            @if($d->transaction_id == $t->id)
                                @foreach($shoes as $s)
                                    @if($d->item_id == $s->id)
                                        <div class="col-md-4">
                                            <img src="{{asset('storage/images/' . $s->image)}}" width="300px" height="200px" alt="no image">
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>        
                    @endforeach
                @elseif(auth()->user()->role == 'admin')
                    @foreach($trs as $t)
                        <div class="row course-set courses__row" style="margin-bottom: 100px;">
                            <div id="status">
                                <div id="date">
                                    <h5>{{$t->created_at}}</h5>
                                </div>
                                <div id="total">
                                    <h5>Total Rp. {{$t->total}}</h5>
                                </div>
                            </div>
                            @foreach($dts as $d)
                                @if($d->transaction_id == $t->id)
                                    @foreach($shoes as $s)
                                        @if($d->item_id == $s->id)
                                            <div class="col-md-4">
                                                <img src="{{asset('storage/images/' . $s->image)}}" width="300px" height="200px" alt="no image">
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>        
                    @endforeach
                @endif
            @endauth
        </div>
    </div>
@endsection