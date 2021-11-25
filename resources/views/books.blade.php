@extends('welcome')
@section('mainSection')
    <div class="col-md-10">
        <h3 class="text-center bg-warning font-weight-bold">Book List</h3>
        <div class="row">
            <div class="col-md">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr href="/details/{{$book->id}}">
                            <td>{{$book->title}}</td>
                            <td>{{$book->Detail->author}}</td>
                            <td>
                                <button class="btn btn-primary">
                                    <a href="/details/{{$book->id}}" class="font-weight-bold">VIEW</a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('pagination')
    <div class="row">
        <div class="col-md-10">
            <nav aria-label="...">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

