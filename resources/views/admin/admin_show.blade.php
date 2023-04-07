<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar');
      <!-- partial -->
     @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                <h1 style="color:red">admin show</h1>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Office</th>
      <th scope="col">Age</th>
      <th scope="col">Start date</th>
      <th scope="col">action</th>
      <th scope="col">edit</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->position}}</td>
      <td>{{$data->office}}</td>
      <td>{{$data->age}}</td>
      <td>{{$data->date}}</td>
      <td><a class="btn btn-danger" href="{{url('/auth_delete', $data->id)}}">Delete</a></td>
      <td><a class="btn btn-success" href="{{url('/auth_update', $data->id)}}">Update</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
          </div>
        </div>
    <!-- plugins:js -->
   @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>