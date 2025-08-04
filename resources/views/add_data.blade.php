<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


        <div class="container">
            <a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>

            <form action="{{url('/store-data')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <span>*</span>

                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <span>*</span>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter your address">
                        @error('address')
                        <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="">Phone Number</label>
                        <span>*</span>
                        <input type="text" class="form-control" name="phone" placeholder="Enter your phone number">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>

                        @enderror
                    </div>
                <input type="submit" class="btn btn-primary my-3" value="Submit">

            </form>

        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  </body>
</html>
