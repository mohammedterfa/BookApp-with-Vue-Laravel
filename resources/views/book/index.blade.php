@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
            <div class="card mt-5">
                <div class="card-header">List of all Books</div>
            <div class="card-body">
    <table class="table">
        <thead>
          <tr>

            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->category }}</td>
                    <td>
                        <a href="{{ route('book.edit',$book->id) }}">
                            <button class="btn btn-info">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('book.destroy',$book->id) }}" method="POST">@csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @empty
            <td> No any Books</td>
            @endforelse
        </tbody>
      </table>

    </div>
</div>
{{ $books->links() }}
</div>
</div>
</div>

@endsection

