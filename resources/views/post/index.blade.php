@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<h1 class="my-4">
    Content Post
</h1>

@if(!empty($successMsg))
<div class="alert alert-success"> {{ $successMsg }}</div>
@endif

<div class="row">
    @foreach ($posts as $post)
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://source.unsplash.com/random/500x200?sig={{ $loop->iteration }}" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">{{ $post->title }}</a>
                </h4>
                <small class="fw-bold">{{ $post->user->name }} - {{ $post->user->email }}</small>
                <p class="card-text mt-3">
                    {{ substr($post->content,100) }}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    {!! $posts->links() !!}
</div>
<!-- /.row -->
@endsection