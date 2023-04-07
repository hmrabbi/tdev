<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #login{
            padding-right:30px;
        }
    </style>
  </head>
  <body>
  <div class="container">
        <header class="bg-primary">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <h1 class="text-white text-center mb-0 py-2">Tdevs Software LTD</h1>
                </div>
                <div class="col-lg-7">
                    <ul class="nav justify-content-center py-3">
                        <li class="nav-item"><a class="text-white nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="text-white nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="text-white nav-link" href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>