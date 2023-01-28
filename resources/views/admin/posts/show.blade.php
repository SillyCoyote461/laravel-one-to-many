@extends('layouts.dashboard')
@section('content')

    <div class="container-lg">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Settings</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <th class="col-2" scope="row">{{$post['id']}}</th>
                <td class="col-4">{{$post['title']}}</td>
                <td class="col-4">{{$post['body']}}</td>
                <td class="flex justify-content-between gap-3 col-2">
                    {{-- edit --}}
                    <a class="col-4 fs-4" href="{{route('admin.posts.edit', $post['id'])}}" alt="edit">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    {{-- delete --}}
                    <form method="POST" class="col-4 d-inline-flex" action="{{route('admin.posts.destroy', $post['id'])}}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-link text-danger m-0 p-0 col-4">
                            <i class="fa-sharp fa-solid fa-square-minus fs-4"></i>
                        </button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection
