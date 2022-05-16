<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center
        {
            margin: auto;
            width 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }
        
        .font_size
        {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        
        .img_size
        {
            width: 150px;
            height: 150px;
        }

        .th_color
        {
            background: slategray;
        }
        .th_design
        {
            padding: 30px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
     <div class="main-panel">
         <div class="content-wrapper">
            
            @if(session()->has('message'))
            
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            
            @endif

            <h2 class="font_size">Daftar Kamar</h2>
            <table class="center">
                <tr class="th_color">
                    <th class="th_design">Address</th>
                    <th class="th_design">Category</th>
                    <th class="th_design">Facility</th>
                    <th class="th_design">Price</th>
                    <th class="th_design">Quantity</th>
                    <th class="th_design">Image</th>
                    <th class="th_design">Contact</th>
                    <th class="th_design">Edit</th>
                    <th class="th_design">Delete</th>
                </tr>

                @foreach ($kamar as $kamar)
                    
                <tr>
                    <td>{{ $kamar->address }}</td>
                    <td>{{ $kamar->category }}</td>
                    <td>{{ $kamar->facility }}</td>
                    <td>{{ $kamar->price }}</td>
                    <td>{{ $kamar->quantity }}</td>
                    <td>
                        <img class="img_size" src="/kamar/{{ $kamar->image }}" alt="">
                    </td>
                    <td>{{ $kamar->contact }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('update_kamar', $kamar->id) }}">Edit</a>    
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete the data?')" href="{{ url('delete_kamar', $kamar->id) }}">Delete</a>    
                    </td>                
                </tr>

                @endforeach

            </table>
         </div>
     </div>
    <!-- container-scroller -->
    <!-- page-body-wrapper ends -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>