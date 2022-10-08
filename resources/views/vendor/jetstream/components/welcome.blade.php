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
                        <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="graduates.blade">Graduates</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Deficiencies</a>
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

    <div class="graduatesTable container">
        <div class="row">
            <div class="col-5">
                <p class="fs-3">List of Graduates</p>
            </div>
            <div class="col-7 row d-flex align-items-center">
                <div class="col-2">
                    <label for=""><b>School: </b></label>
                </div>
                <div class="col-5">
                    <div class="d-flex">
                        <select class="form-select col-2" aria-label="Default select example">
                            <option selected>View School</option>
                            <option value="1">SEAIT</option>
                            <option value="2">SHaNS</option>
                            <option value="3">SAB</option>
                            <option value="4">STEH</option>
                            <option value="5">SGS</option>
                            <option value="5">CoL</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>


            </div>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
    <tr>
    <td><span>studentID</span></td>
        <td><span>firstName</span></td>
        <td><span>lastName</span></td>
        <td><span>Address</span></td>
        <td><span>course</span></td>
    </tr>
    </thead>
            <tbody>
    <tr>

        </tr>
        
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>