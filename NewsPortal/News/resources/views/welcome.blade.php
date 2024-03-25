<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>
<body>
    <main>
    <section class="header">
        <header>
            <div>
                {{$date}}
            </div>
            <div>
                <h1>The Hacking Times</h1>
            </div>
            <div>
                <button>Sign in</button>
                <button>Subscribe</button>
            </div>
        </header>
        <nav>@foreach
            <div><a href="news/{{$value['id']}}">News</a></div>
            <div>Sports</div>
            <div>Business</div>
            <div>Option</div>
            <div>Life and Style</div>
            @endforeach
    </nav>
    <hr>
    </section>
    <!-- end of header section -->
    <section class="hero-wrapper">
        <div class="hero-left">
            <div class="hero_nav">
                <ul>
                    @foreach($hero_nav as $nav)
                    <li>{{$nav}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="hero_main">
                <div>
                    <img src="{{ asset('Images/news.jpg') }}" alt="news-image" srcset="">
                </div>
                <div>
                    this is the news section
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero section  -->
    <section>
        <h1>this is sports news</h1>
    </section>
    <!-- end of sports news section  -->
    <section>
        <h1>this is business news</h1>
    </section>
    <!-- end of business news section  -->
    <section>
        <h1>life and style</h1>
    </section>
    <!-- end of life and and style section  -->
    <section>
        <footer>
            this is footer
        </footer>
    </section>
    <!-- end of footer section  -->
    </main>
</body>
</html>