<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo Perfect</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600;700&amp;display=swap"/>
    </noscript>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link href="/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> --}}
    <link href="/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/css/app.css?ver=1.2.0" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body id="top">
<div class="page">
    <header>
        <div class="pp-header ">

            {{-- @if (Route::has('login'))
                <div class=" hidden absolute top-0 right-0 px-6 py-4  sm:block ">


                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        {{-- <li class="nav-item active"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a> --}}
                    {{-- @else --}}
                    {{-- <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Log in</a> --}}
{{--
                        <a href="{{ route('login') }}" class=" btn btn-primary ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" btn btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif  --}}
            <nav class=" jus navbar navbar-expand-lg navbar-light justify-content-end">
                <div class="container"><a href="/"><img src="/images/favicon.png" alt="Logo"></a><a class="navbar-brand" href="/">Photo Perfect</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a>
                            </li>
                            @if (Route::has('login'))



                                @auth

                                    {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                    <li class="nav-item mr-1"><a class="bg-primary mt-1 nav-link rounded text-sm text-white pl-1" href="{{ url('/dashboard') }}"><span class="pl-1">Welcome {{ auth()->user()->name }}</span></a></li>

                                        <form action="/logout" method="post">
                                            @csrf
                                            <li class="nav-item "><button type="submit" class="bg-secondary mt-1 nav-link rounded text-sm text-white pl-1">Logout</button></li>


                                        </form>

                                @else
                                <li class="nav-item  mr-1"><a class="bg-primary mt-1 nav-link rounded text-sm text-white pl-1" href="{{ route('login') }}">Log in</a></li>

                                    {{-- <a href="{{ route('login') }}" class=" btn btn-primary ">Log in</a> --}}

                                    @if (Route::has('register'))
                                       <li class="nav-item "><a href="{{ route('register') }}" class="pl-1 bg-primary mt-1 nav-link rounded text-sm text-white">Register</a></li>
                                    @endif
                                @endauth

                        @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    {{ $slot }}


<footer class="pp-footer">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-12"><a class="pp-facebook btn btn-link" href="#"><i class="fab fa-facebook-f fa-2x " aria-hidden="true"></i></a><a class="pp-twitter btn btn-link " href="#"><i class="fab fa-twitter fa-2x " aria-hidden="true"></i></a><a class="pp-youtube btn btn-link" href="#"><i class="fab fa-youtube fa-2x" aria-hidden="true"></i></a><a class="pp-instagram btn btn-link" href="#"><i class="fab fa-instagram fa-2x " aria-hidden="true"></i></a></div>
            <div class="col-md-12">
                <p class="mt-3">Copyright &copy; Photo Perfect. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
            </div>
        </div>
    </div>
</footer>

@if (session()->has('success'))

    <div
        class="justify-content-end mb-3 mr-3 text-sm"
        style="position: fixed; bottom: 0px;right: 0px;"
        x-data="{show: true}"
        x-init="setTimeout(()=> show=false ,4000)"
        x-show="show"
        >

        <p class="badge-primary p-2 rounded-lg">{{ session('success') }}</p>
    </div>

@endif



<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script src="/js/bootstrap.bundle.min.js?ver=1.2.0"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
<script src="/js/app.js?ver=1.2.0"></script>





</body>
</html>
