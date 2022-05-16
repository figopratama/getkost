<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

        .div_center{
            /* margin-left: -50px;
            position: absolute; */
            text-align: center;
            padding-top: 40px; }
            .div_center .table {
                margin: auto;
                margin-top: 80px;
                text-align: center;
                width: 100%; 
                border: 3px solid white; }
        
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color{
            color:black;
        }

        

    </style>
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    {{-- @include('admin.body') --}}
    <div class="main-panel">
        <div class="content-wrapper">

            @if(session()->has('message'))
            
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            
            @endif

            <div class="div_center">
                <h2 class="h2_font">
                    Add Category
                </h2>

                <form action="{{ url('/add_category') }}" method="POST">
                    
                    @csrf

                    <input class="input_color" type="text" name="category" placeholder="Write category name">

                    <input type="submit" name="submit" class="btn btn-primary" value="Add Category">

                </form>

                <table class="table">
                    <tr>
                        <td>Category Name</td>
                        <td>Action</td>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{ $data->category_name }}</td> {{-- Category Name --}}
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{ url('delete_category', $data->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            
            
        <!-- partial -->
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- container-scroller -->
    <!-- page-body-wrapper ends -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>