@extends('layouts.main-layout')

@section('content')
<section id="description" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-8 p-0">
                <h3>{{ $comic['title'] }}</h3>
            </div>
            <div class="col-7 available-col d-flex align-items-center my-2">
                <div class="col-7 d-flex ">
                    <p><strong>U.S. Price:</strong></p> <p class="ms-2">{{ $comic['price'] }}</p>  
                </div>
                <div class="col-1">
                    AVAILABLE
                </div>
                <div class="col-3 offset-1 ps-1">
                    Check Availability
                </div>
            </div> 
            <div class="col-7 p-0">
                <p> {{ $comic['description'] }}</p>
            </div>   
        </div>
    </div>
</section>
<section id="info" class="pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5>Talent</h5>
                   <hr>
                <div class="artist d-flex">
                    <div class="col-1">
                        <p><strong>Art By:</strong></p> 
                    </div>
                    <div class="col-11">
                        <p class="ms-5">{{ implode(', ', $comic['artists']) }}</p>                    
                    </div>
                </div>
                <hr>
                <div class="writers d-flex">
                    <div class="col-1">
                        <p><strong>Writers:</strong></p>
                    </div>
                    <div class="col-11"> <p class="ms-5">{{ implode(', ', $comic['writers']) }}</p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col 6">
                <h5>Specs</h5>
                <hr>
                <div class="series d-flex">
                <div class="col-1 me-5">
                    <p><strong>Series:</strong></p> 
                </div>
                <div class="col-11">
                   <p> {{ $comic['series'] }}</p>
                </div>
            </div>
                <hr>
                <div class="price d-flex">
                    <div class="col-2">
                        <p><strong>U.S. Price</strong></p>
                    </div>
                    <div class="col-10 ms-2"> 
                        <p>{{ $comic['price'] }}</p>
                    </div>
                </div>
                <hr>
                <div class="date d-flex">
                    <div class="col-2">
                        <p><strong>Sale Date:</strong></p>
                    </div>
                    <div class="col-10 ms-2"> 
                        <p> {{ $comic['sale_date'] }}</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
@endsection

<style>

    #description{
        .row{
            width: 90%;
            margin : 0 auto;

            .available-col{
                background-color: greenyellow;
            }

            .offset-1{
                border-left: 1px solid black
            }
        }
    }
    #info{
        background-color: #ddd;

        .row{
            width: 90%;
            margin : 0 auto;

            p{
                font-size: 11px
            }
        }
    }
</style>