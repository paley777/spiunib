@extends('landing.layouts.main')

@section('container')
    <style>
        .background {
            background-image: url("{{ asset('storage/images/universitas-bengkulu.jpg') }}");
            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .ml11 {
            font-weight: 700;
        }

        .ml11 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.1em;
            padding-right: 0.05em;
            padding-bottom: 0.15em;
        }

        .ml11 .line {
            opacity: 0;
            position: absolute;
            left: 0;
            height: 100%;
            width: 3px;
            background-color: #fff;
            transform-origin: 0 50%;
        }

        .ml11 .line1 {
            top: 0;
            left: 0;
        }

        .ml11 .letter {
            display: inline-block;
            line-height: 1em;
        }
    </style>
    <div class="py-4 mt-0 px-0 background"
        style="color: rgb(255,255,255);font-family: ABeeZee, sans-serif;">
        <header class="py-5">
        <div class="pricing-header mt-5 py-5 p-3 pb-md-4 mx-auto text-center">
            <h1 class="ml11 display-4 text-white fw-normal"> <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">Selamat Datang</span>
                </span></h1>
            <p class="text-white">Situs Resmi Satuan Pengawasan Internal Universitas Bengkulu.
            </p>

            <a type="button" href="/news" class="btn btn-dark" id="fontp">Lihat Berita Terkini</a>
        </div>
        </header>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml11 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml11 .line',
                scaleY: [0, 1],
                opacity: [0.5, 1],
                easing: "easeOutExpo",
                duration: 700
            })
            .add({
                targets: '.ml11 .line',
                translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 50],
                easing: "easeOutExpo",
                duration: 700,
                delay: 100
            }).add({
                targets: '.ml11 .letter',
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 2000,
                offset: '-=775',
                delay: (el, i) => 34 * (i + 1)
            }).add({
                targets: '.ml11',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>
@endsection
