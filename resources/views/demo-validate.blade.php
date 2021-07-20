<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="container">
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <h2>Demo Validate</h2>
    <form action="/demo/validate/store" method="post">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name">
            @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" class="form-control" placeholder="Enter description" name="description">
            @error('description')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="text" class="form-control" placeholder="Enter price" name="price">
            @error('price')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
