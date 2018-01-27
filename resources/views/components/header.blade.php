<header>
    <nav>
        <a href="/" class="title">Blog</a>
        <ul>
            @if (auth()->check())
                <li><a href="{{ route('posts.create') }}">記事投稿</a></li>
            @else
                <li><a href="{{ route('login') }}">ログイン</a></li>
            @endif
        </ul>
    </nav>
</header>
