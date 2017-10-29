<div class="blog-masthead">
  <div class="container">
    <nav class="nav">
      <a class="nav-link {{ isActiveRoute('/') }}" href="/">Home</a>
      <a class="nav-link {{ isActiveRoute('posts/create') }}" href="/posts/create">Posts</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>

      @if (Auth::check())

        <a class="nav-link ml-auto" href="/logout">Logout</a>

        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>

        @else

        <a class="nav-link ml-auto {{ isActiveRoute('login') }}" href="/login">Login</a>

        <a class="nav-link {{ isActiveRoute('register') }}" href="/register">Register</a>

      @endif

    </nav>
  </div>
</div>
