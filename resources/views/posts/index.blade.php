@extends('app')



@section('content')

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>

        @can('admin')
        <th scope="col">Action</th>
        @elsecan('manager')
        <th scope="col">Action</th>    
        @endcan

      </tr>
    </thead>
    <tbody>
@foreach ($posts as $post)


      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>

        @can('admin')

        <td>
          <a href="#" class="btn btn-info text-white">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>

        @elsecan('manager')
        <td>
            <a href="#" class="btn btn-info text-white">Edit</a>
        </td>

        @endcan
        
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection