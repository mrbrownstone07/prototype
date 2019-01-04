
@extends('layouts.master')

@section('content')

    <div id="main-div" class="row">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="b1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="b2.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="b3.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" card rounded-0 fixed-bottom" style="">
        <div class="card-body">
            <div class="row">
                <div class=" col-md-3 text-center">
                    <div class="logo">
                        Services
                    </div>
                    <hr>
                    <div class="style_font">
                        job 1 <br>
                        job 2 <br>
                        job 3 <br>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="logo">
                        Maverick Eye
                    </div>
                    <hr>
                    <div class="style_font">
                        Road: number, Section: number <br>
                        area, city-zipcode <br>
                        country
                    </div>
                </div>
                <div class=" col-md-3 text-center">
                    <div class="logo">
                        Team
                    </div>
                    <hr class="divider">
                    <div class="style_font">
                        Member 1 <br>
                        Member 2 <br>
                        Member 3 <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white text-center style_font">
            <small> @DEVELOPED BY MAHDI MOHAMMAD SHIBLI </small>
        </div>
    </div>
   
@endsection