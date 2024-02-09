@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<section id="comics" style="padding: 50px 0;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($comics as $comic)
            <div class="col-2 mb-3" style="height: 300px; width:200px;">
                <div class="card border-0 rounded-0">
                <img src="{{$comic['thumb']}}">
                <h6 class="text-center">{{$comic['series']}}</h6>
                </div>
            </div>     
            @endforeach

            <div class="button text-center mt-5">
                <button>Load More</button>
            </div>
        </div>
    </div>
</section>

<style>
#comics{
    background-color: #333333;
    .container{
        width: 80%;   


        h6{
            font-size: 15px;
            color: #fff;
        }
        img{
            height: 250px;
        }
    }

    .col-2{
        background-color: #333333;
        .card{
            background-color: #333333;
        }
    }

    button{
        padding: 5px 0;
        width: 200px;
        text-transform: uppercase;
        background-color: #0282f9;
        color: white;
        border: none;
        cursor: pointer;
    }
}
 </style>
@endsection
