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
            <a href="{{url('/add-data')}}" class="btn btn-primary my-3">Add Data</a>
            @if (Session::has('msg'))
                <p class="alert alert-success">{{ Session::get('msg')}}</p>

            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ( $showData as $key=>$data )


                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>
                                <a href="{{url('/edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/delete-data/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete')">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $showData-> links()}}
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  </body>
</html>
