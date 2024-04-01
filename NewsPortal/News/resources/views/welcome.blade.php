<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacking News</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <nav>
            <div><a href="#">News</a></div>
            <div>Sports</div>
            <div>Business</div>
            <div>Option</div>
            <div>Life and Style</div>
            
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
                <div id="image">
                    <img src="{{ asset('Images/news.jpg') }}" alt="news-image" srcset="">
                </div>
                <div>
                    this is the news section
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div>
                <h1>Suscribers only ></h1>
            </div>
            <div class="sub">
            <div>
                <img src="{{ asset('Images/news.jpg') }}" alt="">
            </div>
            <div>this is for text</div>
            </div>
            <div class="sub">
            <div>
            <img src="{{ asset('Images/news.jpg') }}" alt="">
            </div>
            <div>this is for text</div>
            </div>
            <div class="sub">
            <div>
            <img src="{{ asset('Images/news.jpg') }}" alt="">
            </div>
            <div>this is for text</div>
            </div>
        </div>
    </section>
    <!-- end of hero section  -->
    <section>
    <div class="other-news">
            <div>news</div>
            <div>news</div>
            <div>news</div>
            <div>news</div>
            <div>news</div>
            <div>news</div>
            <div>news</div>
            <div>news</div>
            <div>news</div>
        </div>
        <!-- <h1>this is sports news</h1> -->
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