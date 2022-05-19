@extends('layouts.main')

@section('content')
<div class="row">
    <div class="card w-25 mt-4">
        <div class="card-body">
            <h5 class="card-title">Content Post</h5>
            <p class="card-text">Content Post dengan email, name penulisnya</p>
            <a href="{{ route('post.index') }}" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
    <div class="card w-25 mt-4">
        <div class="card-body">
            <h5 class="card-title">User Lists</h5>
            <p class="card-text">User List dengan comment dari usernya</p>
            <a href="{{ route('user.index') }}" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
    <div class="card w-25 mt-4">
        <div class="card-body">
            <h5 class="card-title">Comment Guest</h5>
            <p class="card-text">Comment Guest yang usernya tidak terdaftar disistem</p>
            <a href="{{ route('comment.index') }}" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
</div>
@endsection