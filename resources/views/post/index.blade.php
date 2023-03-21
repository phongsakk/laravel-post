@extends('layouts.template')

@section('content')
    <div class="container-fluid pt-4 px-4">
        {{-- <div class="bg-secondary rounded-top p-4"> --}}
        <div class="row g-4">
            <div class="col-12">
                <form action="{{ route('post.store') }}" method="POST" class="bg-secondary rounded h-100 p-4">
                    @csrf
                    <h6 class="mb-4">Post title</h6>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('title') is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
                            name="title" rows="4">{{ old('title') }}</textarea>
                        <label for="floatingInput">Post title</label>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Posts</h6>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Create By</th>
                                <th scope="col">Create Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->createBy->email }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('post.edit', ['post' => $post->id]) }}"
                                                class="btn btn-warning">
                                                Edit
                                            </a>
                                            <button target="#form-del-{{ $post->id }}" class="del-btn btn btn-danger">
                                                Delete
                                            </button>
                                        </div>
                                        <form id="form-del-{{ $post->id }}" action="{{ route('post.destroy', ['post'=>$post->id]) }}" method="POST" class="d-hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="module">
            $('.del-btn').on('click', function() {
                let target = $(this).attr('target');
                let form = $(target);
                Swal.fire({
                    title: 'Delete?',
                    text: 'Are you sure you want to delete',
                    icon: 'warning',
                    showCancelButton: true,
                }).then((response)=>{
                    const {isConfirmed} = response;
                    if (isConfirmed) {
                        form.submit();
                    }
                });
            });
        </script>
        {{-- </div> --}}
    </div>
@endsection
