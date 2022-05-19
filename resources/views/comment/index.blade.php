@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<h1 class="my-4">
    Comment Guest
</h1>

@if(!empty($successMsg))
<div class="alert alert-success"> {{ $successMsg }}</div>
@endif

<div class="row">
    @foreach ($comments as $comment)
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
    </div>
    @endforeach

    {!! $comments->links() !!}
</div>
<!-- /.row -->
@endsection