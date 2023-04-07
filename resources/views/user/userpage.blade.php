<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<section>
  <div class="container">
        <header class="bg-primary">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <h1 class="text-white text-center mb-0 py-2">Tdevs Software LTD</h1>
                </div>
                <div class="col-lg-7">
              
                    <ul class="nav justify-content-center py-3">
                    @if (Route::has('login'))
                        @auth 
                        <li class="nav-item">
                        <x-app-layout>
    
                       </x-app-layout>
                       </li>
                        @else
                        <li class="nav-item"><a class="text-white nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="text-white nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    @endif    
                    </ul> 
                      
                </div>
            </div>
        </header>
      </div>
    <section>

    <section>
        <div class="container">
            <div class="row">
            <form action="{{url('/user_create')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Potition</label>
                    <input type="text" class="form-control" name="position" placeholder="Position" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Office</label>
                    <input type="text" class="form-control" name="office" placeholder="Office" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Age" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Start Date</label>
                    <input type="date" class="form-control" name="date" placeholder="" required>
                </div>
  
                 <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>