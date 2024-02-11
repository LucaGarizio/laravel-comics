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
                    <a href="{{ route('comic.details', ['id' => $loop->index]) }}">
                        <img src="{{ $comic['thumb'] }}">
                        <h6 class="text-center">{{ $comic['series'] }}</h6>
                    </a>
                </div>
            </div>     
            @endforeach

            <div class="button text-center mt-5">
                <button>Load More</button>
            </div>
        </div>
    </div>
</section>

<section id="shop" >
    <div class="container py-5 d-flex justify-content-center">
        <div class="row justify-content-around">
            <div class="col-2 m-0 p-0 d-flex align-items-center">
                <img src="{{ Vite::asset('public/imgs/buy-comics-digital-comics.png') }}" width="80px">
                <h4>Digital Comics</h4>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('public/imgs/buy-comics-merchandise.png') }}" width="80px">
                <h4>dc merchandise</h4>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('public/imgs/buy-comics-subscriptions.png') }}" width="80px">
                <h4>subscription</h4>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img class="shrink" src="{{ Vite::asset('public/imgs/buy-comics-shop-locator.png') }}" width="80px">
                <h4>comic shop locator</h4>
            </div>
            <div class="col-2 d-flex align-items-center">
                <img src="{{ Vite::asset('public/imgs/buy-dc-power-visa.svg') }}" width="80px">
                <h4>dc power visa</h4>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
#comics{
    background-color: #333333;
    .container{
        width: 90%;   


        h6{
            font-size: 15px;
            color: #fff;
        }
        img{
            height: 250px;
            width: 190px;
        }
    }

    .col-2{

        background-color: #333333;
        .card{
            background-color: #333333;
            padding: 0 20px;
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
#shop{
    .row{
        width: 90%;
    }
    background-color: #0282f9;
    color: white;

    h4{
        font-size:12px;
        text-transform: uppercase;
        margin-left: 10px;
    }
    img{
        width:  50px;
    }

    .shrink{
        width: 35px
    }
}

 </style>
