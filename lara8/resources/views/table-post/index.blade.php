@extends('partial.ind')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
 {{session('success')}}
    </div>
@endif
<a href="/layout/post/create" class="btn btn-primary">[+Tambah+]</a>

<table class="table">
    <thead class="thead-light">
              <tr>
                  <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col" >Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($post as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->title}}</td>
                        <td>{{$value->body}}</td>
                        <td>
                            <form action="/layout/post/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/layout/post/{{$value->id}}/show" class="btn btn-info">Show</a>|
                                <a href="/layout/post/{{$value->id}}/edit" class="btn btn-primary">Edit</a>|
                                <button type="submit" class="btn btn-danger my-1" value="Delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>

                    @endsection