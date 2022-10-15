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
        form { 
            margin: 0 auto; 
            width:250px;
        }
        body {
            background-image: url('/img/2.png');
        }
    </style>
    
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/dashboard') }}"><b>
                    <img src="https://upload.wikimedia.org/wikipedia/en/4/44/Saint_Mary%27s_University_logo.png" class="img-fluid me-3 p-1" alt="" srcset=""> SMU | CGDS</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"  href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-right">
                        <a class="nav-link" aria-current="page" href="{{ url('/login') }}">Login as admin</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<br>
    <form action="/action_page.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" maxlength="25" size="25"><br><br>
  <label for="pin">PIN:</label>
  <input type="text" id="pin" name="pin" maxlength="25" size="25"><br><br>
  <input type="submit" value="Submit">
</form>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>