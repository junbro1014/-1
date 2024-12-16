<!DOCTYPE html>
    <html lang="ko">
    <head>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div>
            현재 라우트 {{ Route::currentRouteName() }}, 메세지 {{ $message }}
        </div>
        <a href="{{ route('root') }}">root</a>
        <a href="{{ route('page') }}">page</a>
        <a href="{{ route('blog') }}">blog</a>
    </body>
</html>
