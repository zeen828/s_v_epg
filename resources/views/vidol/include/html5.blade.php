<!DOCTYPE html>
<html lang="zh-Hant-TW">
        <title>{{ $title }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="{{ asset("ass/vidol/html5.css") }}">
    </head>
    <body>
        <header>
            @include('vidol.include.body_header')
        </header>
        <nav>
            @include('vidol.include.body_nav')
        </nav>
        <main>
            <article>
                <h1>{{ $title }}</h1>
                <section>
                    內容
                </section>
                <aside>
                    區塊
                </aside>
            </article>
        </main>
        <footer>
            @include('vidol.include.body_footer')
        </footer>
    </body>
</html>
