@extends('layouts.admin')
@section('title', 'Add photo')
@section('main')
<section class="container py-5">
                <h1 class="text-center fs-2 py-2">Add new photo</h1>
                <form action="{{route('article.store')}}" method="POST" class="forms forms w-50 mx-auto" enctype="multipart/form-data">
                    @csrf
                    @if(session('status'))
                    <div class="form-group">
                        <p class="form-control btn btn-success btn-block">{{session('status')}}</p>
                    </div>
                    @endif
                    <div class="form-group  mb-5">
                        <label for="imgpath" class="mb-3">Add the photo</label>
                        <input type="file" class="form-control" id="imgpath" name="imgpath" >
                        <p class="text-secondary mt-3 w-75">
                        Make sure all your photos have the same width and height to make design perfect. 
                        </p>
                    </div>
                    @error('imgpath')
                    <div class="form-group">
                        <p class="form-control btn btn-danger btn-block">{{$message}}</p>
                    </div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
</section>
@endsection