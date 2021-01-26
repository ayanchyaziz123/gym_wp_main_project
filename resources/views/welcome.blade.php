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
      height: 100;
      width: 100;
    }
  </style>
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>ABC GYM</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">

          <a class="nav-link" data-toggle="modal" data-target="#myModal" href="">Contact Us</a>
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
      <div class="modal-content">

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
            <button type="submbit" class="btn btn-primary">Submit</button>
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
        <img src="https://media.istockphoto.com/photos/empty-gym-picture-id1132006407?k=6&m=1132006407&s=612x612&w=0&h=vOx89bJoTm6tqEMRRZxsmzfdr1jwrmrbE-0yfm7sm74=" alt="Los Angeles" width="1100" style="max-height: 450px;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/gym-without-people-with-large-group-of-exercise-machines-picture-id936381808?k=6&m=936381808&s=612x612&w=0&h=pUrYUmK7M1QZk710iAA19Tcx4TZKmCTmVOBXt-8wq_0=" alt="Chicago" width="1100" height="500" style="max-height: 450px;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/gym-picture-id952552262?k=6&m=952552262&s=612x612&w=0&h=tJ2sVXHvZrr_diY8TlbeoF7bzzpycgU01raoyx-RF6M=" alt="New York" width="1100" height="500" style="max-height: 450px;">
        <div class="carousel-caption">
          <h3>New York</h3>
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
        <h2>About Us</h2>
        <h5>Photo of me:</h5>
        <img src="https://api.time.com/wp-content/uploads/2020/03/gym-coronavirus.jpg" class="img-fluid">
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        <h3>Some Links</h3>
        <p>Lorem ipsum dolor sit ame.</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active bg-info" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lgg" href="">Location</a>
          </li>
          <!-- The Modal -->
          <div class="modal fade bd-example-modal-lgg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content p-5">
              <h4>Location</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis aliquam rerum consequatur, cumque, 
                consectetur, maiores in hic accusamus molestias beatae a temporibus totam velit magni magnam praesentium officiis non? Quibusdam.
              </div>
            </div>
          </div>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg" href="">About Us</a>
          </li>
          <!-- The Modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content p-5">
              <h4>Our Gym</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis aliquam rerum consequatur, cumque, 
                consectetur, maiores in hic accusamus molestias beatae a temporibus totam velit magni magnam praesentium officiis non? Quibusdam.
              </div>
            </div>
          </div>
        </ul>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>


    <div class="row">
      <div class="col-4">
        ayans blog
      </div>
      <div class="col-4">
        ayans blog
      </div>
      <div class="col-4">
        ayans blog
      </div>
    </div>


  </div>



  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>ayans gym</p>
  </div>

</body>

</html>