<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book App</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
    <div class="card mt-5">
        <div class="card-header">Update A Book</div>
    <div class="card-body">
    <form action="{{ route('book.update',$book->id) }}" method="POST">@csrf

        <label>Name of book</label>
        <input type="text" name="name" class="form-control" value="{{ $book->name }}">
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
        <br>
        <label>Description of book</label>
        <textarea name="description" class="form-control" >{{ $book->description }}</textarea>
        @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
        <br>
        <label>Category</label>
        <select name="category" class="form-control">
            <option value="">select</option>
            <option value="frictional" @if($book->category=='frictional')selected @endif>frictional book</option>
            <option value="biography" @if($book->category=='biography')selected @endif>biography book</option>
            <option value="comdey" @if($book->category=='comdey')selected @endif>comdey book</option>
            <option value="educational" @if($book->category=='educational')selected @endif>educational book</option>
        </select>
        @if ($errors->has('category'))
            <span class="text-danger">{{ $errors->first('category') }}</span>
        @endif
        <br>

        <input type="submit" value="submit" class="btn btn-primary">

    </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


