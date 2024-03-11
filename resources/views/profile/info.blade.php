@extends('layouts.admin')
@section('title', 'Edit the information')
@section('main')
<section class="container py-5">
        <h1 class="text-center fs-2 py-2 mb-5">Edit Your Information</h1>
        <form action="{{route('info.update', $info)}}" method="POST" class="forms  w-50 mx-auto">
              @method('patch')
              @csrf
              <div class="form-group  mb-5">
                 <label for="info" class="form-label">About You</label>
                  <textarea  class="form-control" id="info" name="info" placeholder="Tell visitors about you">{{$info->info}}</textarea>
              </div>
             <div class="form-group  mb-5">
                 <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$info->email}}">
              </div>
             <div class="form-group  mb-5">
                 <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{$info->facebook}}">
              </div>
             <div class="form-group  mb-5">
                 <label for="instagram" class="form-label">instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="{{$info->instagram}}">
              </div>
              <div class="form-group  mb-5">
                 <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$info->linkedin}}">
              </div>
      <button type="submit" class="btn btn-primary mb-5">Update</button>
    </form>
</section>
@endsection