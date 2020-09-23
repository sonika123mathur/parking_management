<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <title>Parking Management</title>
    <style>
        #parking-info{
            margin-top: 80px;
        }
        .col-md-2{
            padding-left: 5px;
            padding-right: 5px;
        }
        .parking-slot .background{
            background-color: #C4C4C4;
            height: 250px;
        }
        .parking-slot .background p{
            padding-top: 20px;
            font-size: 2rem;
        }
        .parking-slot .background img{
            height: 150px;
        }
    </style>
</head>
<body>


<section id="parking-info">
    <div class="container text-center">
        <h1>Parking Management System</h1>
        <div class="row py-5">

            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 1</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 2</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 3</p>
                    <p class="text-success">Available</p>
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 4</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 5</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 6</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
        </div>
        <div class="row py-5">

            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 7</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 8</p>
                    <p class="text-success">Available</p>
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 9</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 10</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 11</p>
                    <p class="text-success">Available</p>
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 12</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
        </div>
        <div class="row py-5">

            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 13</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 14</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 15</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 16</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 17</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
            <div class="col-md-2 align-self-center parking-slot">
                <div class="background" style="height: 250px;">
                    <p >Parking 18</p>
                    <img src="{{asset('assets/images/car.png')}}" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
