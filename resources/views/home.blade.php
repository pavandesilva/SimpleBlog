@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Post') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Post title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Write Post title" required>
                            </div>

                            <div class="form-group">
                                <label>Post description</label>
                                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Write Post" required>
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
