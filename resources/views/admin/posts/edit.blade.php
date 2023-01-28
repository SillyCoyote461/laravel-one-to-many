@extends('layouts.dashboard')
@section('content')
<div class="container-lg">
    <form method="POST" action="{{route('admin.posts.update', $post['id'])}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{$post['title']}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Body</label>
            <input name="body" type="text" class="form-control" value="{{$post['body']}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
