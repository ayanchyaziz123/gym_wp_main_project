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
    .cd{
      color: black;
    }
  </style>
</head>

<body>

  <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
    <h1>ABC GYM</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

  <nav class="navbar sticky-top navbar-expand-sm bg-info navbar-dark">
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
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://media.istockphoto.com/photos/empty-gym-picture-id1132006407?k=6&m=1132006407&s=612x612&w=0&h=vOx89bJoTm6tqEMRRZxsmzfdr1jwrmrbE-0yfm7sm74=" alt="Los Angeles" width="1100" style="max-height: 500px;">
        <div class="carousel-caption">
          <h3>Our Room</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/gym-without-people-with-large-group-of-exercise-machines-picture-id936381808?k=6&m=936381808&s=612x612&w=0&h=pUrYUmK7M1QZk710iAA19Tcx4TZKmCTmVOBXt-8wq_0=" alt="Chicago" width="1100" height="500" style="max-height: 500px;">
        <div class="carousel-caption">
          <h3>Our Gym</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/gym-picture-id952552262?k=6&m=952552262&s=612x612&w=0&h=tJ2sVXHvZrr_diY8TlbeoF7bzzpycgU01raoyx-RF6M=" alt="New York" width="1100" height="500" style="max-height: 500px;">
        <div class="carousel-caption">
          <h3>This is great</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <h4>About Me</h4>
        <h5>Photo of me:</h5>
        <img src="aya.jpeg" class="img-fluid">
        <div class="text-center">
        <span class="mt-3">Name : Azizur Rahman Chy Ayan</span><br>
        <span class="mt-3">Email : aaziz9642@gmail.com</span><br>
        <span>Mobile : 01759773446</span>
        
        
        </div>
       
        <h4 class="mt-5">Some Links</h4>
        <p>to see information about us</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active bg-info" href="{{route('welcome')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lgg" href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Location</a>
          </li>
          <!-- The Modal -->
          <div class="modal fade bd-example-modal-lgg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content p-5">
                <div class="modal-header">
                  <h4 class="modal-title">Location Information</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="row row-content mt-2">

                  <div class="col-12 col-sm-4 offset-sm-1">
                    <h5>Our Address</h5>
                    <address style="font-size: 100%">
                      121, Clear Water Bay Road<br>
                      Clear Water Bay, Kowloon<br>
                      HONG KONG<br>
                      <i class="fa fa-phone"></i>: +852 1234 5678<br>
                      <i class="fa fa-fax"></i>: +852 8765 4321<br>
                      <i class="fa fa-envelope"></i>:
                      <a href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                  </div>
                  <div class="col-12 col-sm-6 offset-sm-1">
                    <h5>Map of our Location</h5>
                  </div>
                  <div class="col-12 col-sm-11 offset-sm-1">
                    <div class="btn-group" role="group">
                      <a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                      <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                      <a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg" href=""><i class="fa fa-podcast" aria-hidden="true"></i> About Us</a>
          </li>
          <!-- The Modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content p-5">
                <div class="modal-header">
                  <h4 class="modal-title">Our History</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="row mt-5 mb-5">
                  <div class="col-12 col-md-6">

                    <p>Started in 2010, Ristorante con Fusion quickly established itself as a culinary icon par excellence in Hong Kong. With its unique brand of world fusion cuisine that can be found nowhere else, it enjoys patronage from the A-list clientele in Hong Kong. Featuring four of the best three-star Michelin chefs in the world, you never know what will arrive on your plate the next time you visit us.</p>
                    <p>The restaurant traces its humble beginnings to <em>The Frying Pan</em>, a successful chain started by our CEO, Mr. Peter Pan, that featured for the first time the world's best cuisines in a pan.</p>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="card">
                      <h3 class="card-header bg-primary text-white">Facts At a Glance</h3>
                      <div class="card-body">
                        <dl class="row">
                          <dt class="col-6">Started</dt>
                          <dd class="col-6">3 Feb. 2013</dd>
                          <dt class="col-6">Major Stake Holder</dt>
                          <dd class="col-6">HK Fine Foods Inc.</dd>
                          <dt class="col-6">Last Year's Turnover</dt>
                          <dd class="col-6">$1,250,375</dd>
                          <dt class="col-6">Employees</dt>
                          <dd class="col-6">40</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-body bg-light">
                      <blockquote class="blockquote">
                        <p class="mb-0">You better cut the pizza in four pieces because
                          I'm not hungry enough to eat six.</p>
                        <footer class="blockquote-footer">Yogi Berra,
                          <cite title="Source Title">The Wit and Wisdom of Yogi Berra,
                            P. Pepe, Diversion Books, 2014</cite>
                        </footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </ul>
        <hr class="d-sm-none">
      </div>

     

      <div class="col-sm-8">
      @foreach ($blogs as $blog)
        <h4>{{$blog->title}}</h4>
        <p><i class="fa fa-user" aria-hidden="true"></i> Created By {{$blog->author}}</p>
        <div><img src="/upload/{{$blog->img_path}}" style="max-height:100px" ;></div>
        <p><i class="fa fa-calendar" aria-hidden="true"></i> Publised On {{$blog->created_at}}</p>
        <a href="{{route('blogUser.show', $blog->id)}}" class="cd"><p>{{substr($blog->descriptions,0 , 200)}}...</p></a>
        <br>
        @endforeach
        <span>
      {{$blogs->links()}}
      </span>
      <style>
      .w-5{
        display: none;
      }
      </style>
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
        <div class="imgsetting d-block m-auto bg-info">
          <i class="fa fa-id-card fa-3x text-white mt-4"></i>
        </div>

        <h2>Qualified Instructor</h2>
        <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall</p>
      </div>

      <div class="col-sm-4">
        <div class="imgsetting d-block m-auto bg-info">
          <i class="fa fa fa-hospital-o fa-3x text-white mt-4"></i>
        </div>

        <h2>fTons of Equipment</h2>
        <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall</p>
      </div>

      <div class="col-sm-4">
        <div class="imgsetting d-block m-auto bg-info">
          <i class="fa fa-bath fa-3x text-white mt-4"></i>
        </div>

        <h2>Ralaxation & Meditation</h2>
        <p>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying it years abundantly fowl tree you shall</p>
      </div>
    </div>


  </div>



  <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
    <p>Copyright ©2021 All rights reserved | This template is made with  by  Ayan</p>
  </div>

</body>

</html>