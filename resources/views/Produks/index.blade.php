<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    {{-- Start Nav --}}
    @include('Layouts.navbar')
    {{-- End Nav --}}

    {{-- Start Content --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <center><h3>List Produk</h3></center>
            </div>
            <div class="row mt-2">

                @foreach($produk as $data)
                    
                <div class="col-4 mt-4">
                    <div class="card border-light" style="width: 18rem;">
                        <img src="https://www.elegantthemes.com/blog/wp-content/uploads/2019/10/loading-screen-featured-image.jpg" alt="">
                    <div class="card-body border-light">
                        <h5 class="card-title">{{$data->Nama_Produk}}</h5>
                        <a href= "/produk/{{$data->id}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- End Content --}}

    {{-- Start Footer --}}  
    @include('Layouts.footer')
    {{-- End Footer --}}

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>