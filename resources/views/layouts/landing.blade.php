<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container">
            <h1>Desa</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#desa">Desa</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="jumbotron">
        <div class="container">
            <h1>Desa</h1>
            <p>Hidup Damai Di Desa</p>
        </div>
    </div>
    <main>
        <section id="tentang">
            <div class="container">
                <h2>Tentang</h2>
                <p>Desa adalah sebuah atau biasa disebut dengan kota atau kabupaten permukiman di area perdesaan (rural).
                    Di Indonesia, istilah desa adalah pembagian wilayah administratif di bawah kecamatan dalam
                    pemerintahan kabupaten yang dipimpin oleh kepala desa.</p>
            </div>
        </section>
        <section id="desa">
            <div class="container">
                <h2>Didesa</h2>
                <div class="desa-item">
                    <h3>Kenapa di Desa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At consectetur eos unde earum off</p>
                </div>
                <div class="desa-item">
                    <h3>Bagaimana di Desa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At consectetur eos unde earum off</p>
                </div>

            </div>
        </section>
        <section id="testimoni">
            <div class="container">
                <h2>Testimoni</h2>
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At consectetur eos unde earum off</p>
                                <cite>by Jan Dhoe</cite>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote>
                                <p>Amet, doloremque deleniti. Adipisci debitis odit blanditiis? Impedit eveniet laboriosam perferendis</p>
                                <cite>by Jhon Dha</cite>
                            </blockquote>
                        </div>
                    </div>
                    <button class="carousel-control prev"><</button>
                    <button class="carousel-control next">></button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; All Right </p>
        </div>
    </footer>

   <!-- Scripts -->
   <script src="{{ asset('js/custom.js') }}" defer></script>

</body>
</html>
