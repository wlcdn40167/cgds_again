<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CGDS | Graduates</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles [Bootstrap] -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- CSS only -->
    <style>
        .img-fluid {
            width: 80px;
            height: 80px;
        }

        .graduatesTable {
            margin-top: 75px;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>
                    <img src="https://upload.wikimedia.org/wikipedia/en/4/44/Saint_Mary%27s_University_logo.png" class="img-fluid me-3 p-1" alt="" srcset=""> SMU | CGDS</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/list') }}">Candidates for Graduation</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin Panel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CGDS | Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles [Bootstrap] -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- CSS only -->
    <style>
        .img-fluid {
            width: 80px;
            height: 80px;
        }
   
   
        .img-cr-fluid{
            width:600px;
            height:350px;
           
        }
        </style> 
    <body class="antialiased">

    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <br> <br> <br> 
   <div class="container text-center">

  <div class="row align-items-center">
    <div class="col">
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <br> <br> <br> 
    <img src="https://www.cta.org/wp-content/uploads/2020/03/empty-classroom.jpg" class="img-cr-fluid img-thumbnail  ms-1 p-3"  alt="">

    </div>
    <div class="col">
    <p class="text-center fw-bold">REGISTAR'S OFFICE <br> CANDIDATES FOR GRADUATION <br> DISSEMINATION SYSTEM </p>
    <p class="text-center">This is an web application that will allow<br> you to view your academic and non- academic <br>
    requirements to be an subjective graduating student</p>
    <h3 class="text-center fw-bold"> SUBMIT YOUR REQUIREMENTS NOW</h3>
    <br>
    <div class="d-grid gap-2 col-2 mx-auto">
    <button type="button" class="btn btn-primary ">CONTACT US</button>
    </div>
    </div>
    </div>
  
  </div>

</div>

    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>