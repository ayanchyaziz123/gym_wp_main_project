<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABC GYM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 50%;
        }

        .ccc {
            height: 100px;
            width: 100px;
        }

        .row-setting {
            margin: 80px 0px !important;
        }

        .imgsetting {
            border-radius: 40%;
            height: 90px;
            width: 90px;
        }

        .cd {
            color: black;
        }

        .im {
            max-height: 90px;
            max-width: 100px;
        }
    </style>
</head>

<body>


    <div class="jumbotron  bg-dark text-white" style="margin-bottom:0">
        <div class="container mb-0">

            <div class="row">
                <div class="col-4 col-sm-2">
                    <img src="https://image.freepik.com/free-vector/bodybuilders-fitness-club-logo_1284-45671.jpg" class="img-fluid im rounded-circle">
                </div>
                <div class="col-4">
                    <h4>FITZONE</h4>
                    <p>Go hard or go home</p>
                </div>

            </div>

        </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-sm bg-info navbar-dark ">
        <a class="navbar-brand" href="{{route('welcome')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class="nav-link" data-toggle="modal" data-target="#myModal" href=""><i class="fa fa-comment" aria-hidden="true"></i> Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content p-3">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Contact Us</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('contacts.store')}}" method="POST">
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Comment</label>
                            <textarea class="form-control" placeholder="Enter comment" name="comment"></textarea>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submbit" class="btn btn-info">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-12">

                <div class="card shadow"><img src="/upload/{{$blogs->img_path}}"></div>








                <h4 class="mt-5">{{$blogs->title}}</h4></br>
                <p><i class="fa fa-user" aria-hidden="true"></i> Created By {{$blogs->author}}</p>

                <p><i class="fa fa-calendar" aria-hidden="true"></i> Publised On {{$blogs->created_at}}</p>

                <p> {{$blogs->descriptions}}</p>

                <br>



            </div>
        </div>
        <!--row 2 -->
        <div style="margin-top: 200px"></div>
        <h1 style="text-align: center; font-weight: bold">WHY YOU JOIN WITH US</h1>
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
                <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall also</p>
            </div>
            <div class="col-4">
            </div>
        </div>

        <div class="row text-center row-setting">
            <div class="col-sm-4 col-md-4 d-block m-auto">
                <div class="imgsetting d-block m-auto bg-warning">
                    <i class="fa fa-id-card fa-3x text-white mt-4"></i>
                </div>

                <h2>Qualified Instructor</h2>
                <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall</p>
            </div>

            <div class="col-sm-4">
                <div class="imgsetting d-block m-auto bg-warning">
                    <i class="fa fa fa-hospital-o fa-3x text-white mt-4"></i>
                </div>

                <h2>fTons of Equipment</h2>
                <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall</p>
            </div>

            <div class="col-sm-4">
                <div class="imgsetting d-block m-auto bg-warning">
                    <i class="fa fa-bath fa-3x text-white mt-4"></i>
                </div>

                <h2>Ralaxation & Meditation</h2>
                <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall</p>
            </div>
        </div>


    </div>



    <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
        <h4>Copyright ©2021 All rights reserved | This template is made with by Ayan</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore libero consequuntur maxime asperiores sit ipsum, molestias eligendi blanditiis aperiam dicta dignissimos. Voluptates maxime voluptatum possimus officia fuga laborum, dicta accusantium.</p>
    </div>

</body>

</html>