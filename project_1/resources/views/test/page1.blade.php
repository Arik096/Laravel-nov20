<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<div  class="col d-flex justify-content-center" style="margin-top:10px;">



<div class="card"style="width: 75%;">
  <div class="card-body">

  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Set Meal
</button>


<!-- Modal -->


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('message'))
<div class="alert alert-success">
{{Session::get('message')}}
</div>
@endif

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select your meal plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <form method="POST" action="{{ route('Meal.store') }}"
      enctype="multipart/form-data" >
      @csrf


      <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Entre Name">
      </div>

      <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control" name="date" placeholder="Entre Name">
      </div>

      <div class="form-group">
      <label for="bf">Breakfast</label>
      <select name="breakfast" class="form-control">
                                  <option value="0">No</option>
                                  <option value="1">yes</option>
                               </select>
      </div>

      <div class="form-group">
      <label for="lu">Lunch</label>
      <select name="lunch" class="form-control">
                                  <option value="0">No</option>
                                  <option value="1">yes</option>
                               </select>
      </div>

      <div class="form-group">
      <label for="di">Dinner</label>
      <select name="dinner" class="form-control">
                                  <option value="0">No</option>
                                  <option value="1">yes</option>
                               </select>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>

      </form>

      </div>
      



  </div>
</div>




    
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
      <table class="table table-striped">
        <tr>
          <th>SN</th>
          <th>Name</th>
          <th>Date</th>
          <th>Breakfast</th>
          <th>Lunch</th>
          <th>Dinner</th>
          <th>Action</th>
        </tr>
    @foreach($meals as $key => $data)
    <tr>    
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->breakfast}}</td> 
      <td>{{$data->lunch}}</td>
      <td>{{$data->dinner}}</td>     
      <td><Button action="" class = "btn btn-info">Edit</Button>
      <Button action="" class = "btn btn-danger">Delete</Button>
      </td>
    </tr>
    @endforeach 
      </table>
    </div>
  </div>


</div>

  

        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
