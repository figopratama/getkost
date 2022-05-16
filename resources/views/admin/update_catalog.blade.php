<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;

        }
        .div_design
        {
            padding-bottom: 15px;
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

            <div class="div_center">
                <h1 class="font_size">Update Kamar Kost</h1>

                <form action="{{ url('/update_kamar_confirm', $kamar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                    <label>Alamat Rumah Kost: </label>
                    <input class="text_color" type="text" name="address" value="{{ $kamar->address }}" placeholder="Alamat Lengkap" required="">
                </div>

                <div class="div_design">
                    <label>Kategori kamar: </label>
                    <select class="text_color" name="category" required="">
                        <option value="" selected="">{{ $kamar->category }}</option>
                        
                        @foreach($category as $category)
                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="div_design">
                    <label>Fasilitas: </label>
                    <input class="text_color" type="text" name="facility" value="{{ $kamar->facility }}" placeholder="Fasilitas kamar" required="">
                </div>
                    
                <div class="div_design">
                    <label>Harga: </label>
                    <input class="text_color" type="text" name="price" value="{{ $kamar->price }}" placeholder="Harga kamar perbulan" required="">
                </div>

                <div class="div_design">
                    <label>Jumlah kamar: </label>
                    <input class="text_color" type="number" name="quantity" value="{{ $kamar->quantity }}" min="0" placeholder="Jumlah kamar tersedia" required="">
                </div>

                <div class="div_design">
                    <label>Foto kamar:</label>
                    <img style="margin: auto;" height="100" width="100" src="/kamar/{{ $kamar->image }}" alt="">
                </div>

                <div class="div_design">
                    <label>Update Foto kamar:</label>
                    <input type="file" name="image" placeholder="Foto kamar" value="{{ $kamar->image }}">
                </div>

                <div class="div_design">
                    <label>Kontak:</label>
                    <input class="text_color" type="text" name="contact" value="{{ $kamar->contact }}" placeholder="Kontak yang bisa dihubungi" required="">
                </div>

                <div class="div_design">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>

    </div>
    <!-- container-scroller -->
    <!-- page-body-wrapper ends -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>