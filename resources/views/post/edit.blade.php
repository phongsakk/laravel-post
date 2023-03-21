@extends('layouts.template')

@section('content')
    <div class="container-fluid pt-4 px-4">
        {{-- <div class="bg-secondary rounded-top p-4"> --}}
        <div class="row g-4">
            <div class="col-12">
                <form action="{{ route('post.update', ['post'=>$post->id]) }}" method="POST" class="bg-secondary rounded h-100 p-4">
                    @csrf
                    @method('PATCH')
                    <h6 class="mb-4">Post title</h6>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('title') is-invalid @enderror" id="floatingInput" placeholder="name@example.com"
                            name="title" rows="4">{{ old('title') ?? $post->title }}</textarea>
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
        </div>
        {{-- </div> --}}
    </div>
@endsection
