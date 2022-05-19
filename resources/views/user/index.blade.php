@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<h1 class="my-4">
    User List
</h1>

@if(!empty($successMsg))
<div class="alert alert-success"> {{ $successMsg }}</div>
@endif

<div class="row">
    @foreach ($users as $user)
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">{{ $user->name }}</a>
                </h4>
                <ul class="list-group">
                    @forelse ($user->comments as $comment)
                    <li class="list-group-item">{{ $comment->comment }}</li>
                    @empty
                    <li class="list-group-item">No Comment</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    @endforeach

    {!! $users->links() !!}
</div>
<!-- /.row -->
@endsection