@extends('layouts.admin')
@section('title', 'Dashboard')
@section('main')
<div class="container py-5 ">
    <h1 class="text-center fs-2">Dashboard</h1>
    <div class="content text-center">
      <h4 class="py-4 text-center"  >Latest Photos</h4>
      <a href="{{route('article.create')}}" class="btn btn-sm w-25 mb-2">Add new</a>
      <table class="table table-hover text-center my-3 photos-table w-75">
          <thead>
            <tr>
              <th scope="col">The photo</th>
              <th scope="col">Delete</th> 
            </tr>
          </thead>
          <tbody>
         @foreach($articles as $article)
        <tr>
          <th scope="row"><img src="{{$article->imgpath}}" class="w-25"></th>
          <td>
              <form action="{{route('article.destroy', $article)}}" method="post" >
                  @method('delete')
                  @csrf
                  <input type="submit" value="Delete" class="btn btn-danger">
              </form>
            </td>
        </tr>
        @endforeach
          </tbody>
      </table>
      <a href="{{route('articles.index')}}" class="btn btn-sections btn-sm d-block mx-auto py-2 w-50">Go to Gallery</a>
   </div>
</div>
@endsection