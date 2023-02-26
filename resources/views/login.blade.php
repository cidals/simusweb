<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SimusWeb | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/logreg.css">
    
</head>

<body>
<div class="main d-flex flex-column justify-content-center align-items-center">

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="wrapper">
        <div class="form-left">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/logo.png') }}" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/pemkot.png') }}" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/Eva dwiyana.png') }}" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/Muhtadi.png') }}" class="d-block w-100" >
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        
        <form class="form-right" action="" method="POST">
            @csrf
            <h2 class="text-uppercase">login</h2>
            {{-- <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>First Name</label>
                    <input type="text" name="first_name" id="first_name" class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="input-field">
                </div>
            </div> --}}
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="input-field" name="username" id="username" autofocus>
            </div>
            {{-- <div class="mb-3">
                <label>Your Phone</label>
                <input type="number" class="input-field" name="phone" id="phone">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea type="text" class="input-field" name="address" id="address"></textarea>
            </div> --}}
            <div class="row">
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="input-field">
                </div>                
            </div>
            
            {{-- <div class="mb-3">
                <label class="option">I agree to the <a href="#">Terms and Conditions</a>
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
            </div> --}}
            <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Login</button>  
        </form>
    </div>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>