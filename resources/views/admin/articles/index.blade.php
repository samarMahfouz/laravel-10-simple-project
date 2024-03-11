@extends('layouts.admin')
@section('title', 'Articles')
@section('main')
<section class="container py-5 content">
        <h1 class="text-center fs-2 py-2">Gallery</h1>
        <button class="btn btn-primary add-button"><a href="{{route('article.create')}}" class="text-decoration-none text-light">Add new photo</a></button>
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
          <th scope="row"><img src="/{{$article->imgpath}}" class="w-25"></th>
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
</section>
@endsection