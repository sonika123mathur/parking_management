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
        #parking-info {
            margin-top: 80px;
        }

        .col-md-2 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .parking-slot .background {
            background-color: #C4C4C4;
            height: 250px;
        }

        .parking-slot .background p {
            padding-top: 20px;
            font-size: 2rem;
        }

        .parking-slot .background img {
            height: 150px;
        }
    </style>
</head>
<body>


<section id="parking-info">
    <div class="container text-center">
        <h1>Parking Management System</h1>
        @foreach($parking->chunk(6) as $eachLine)
            <div class="row py-5">
                @foreach($eachLine as $index=>$eachParking)
                    <div class="col-md-2 align-self-center parking-slot">
                        <div class="background">
                            <p>{{$eachParking->name}}</p>
                            @if($eachParking->distance < config('project.distance_threshold'))
                                <img src="{{asset('assets/images/car.png')}}" alt="">
                            @else
                                <p class="text-success">Available</p>
                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
        @endforeach
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
