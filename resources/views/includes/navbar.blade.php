<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Loops Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('post') ? 'active' : '' }}" aria-current="page" href="{{ route('post.index') }}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" aria-current="page" href="{{ route('user.index') }}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('post') ? 'active' : '' }}" aria-current="page" href="{{ route('comment.index') }}">Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>