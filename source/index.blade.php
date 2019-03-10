@extends('_layouts.master')

@section('title', 'Jeroen Dielis Grafisch Vormgever,DTPer')

@section('content')
<header class="intro-img intro-dark-bg" style="background-image:url(/assets/img/header_background.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="intro-body" data-scrollreveal="move 0 over 1.5s">
                <div class="container">
                    <br>
                    <h1 class="brand-heading">
                        Ik <span class="brand-heading">ben Jeroen Dielis</span><br>Welkom <span class="text-primary"></span>
                    </h1>
                    <hr class="light">
                    
                </div>
            </div>
        </header>
        
        <section id="cv" class="resume-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Download hier mijn CV</h3>
                <br>
            <a class="btn btn-lg btn-rounded btn-primary" href="assets/img/CV-Jeroen-Dielis-2018.pdf" download>Download CV</a></br>
            </div>
        </div>
        <hr class="primary">
</section>
 <!-- @include('_partials.cta', [
       'title' => 'Al onze offertes binnen een 1 uur voor u&nbsp;opgesteld'
    ]) -->
<!-- Call to Action - With Dark Image Background -->
<section id="klussen" class="portfolio-1">
    <div class="container-fluid no-gutter">
        <div class="col-sm-12 text-center">
            <h2>Onlangs afgeronde projecten</h2>
            <hr class="primary">
        </div>
        
        @foreach(array_slice($projects, 0, 6) as $item)
            @include('_partials.home.project_item', $item)
        @endforeach

    </div>
</section>
@endsection

@section('scripts')
	<!-- Script to Activate Formstone Wallpaper jQuery Plugin - Use this script if you want to use an .mp4, .ovg, or .webm video as a background video. -->
    <script>
    $(".video-bg").wallpaper({
        source: {
            mp4: "/assets/mp4/logo_intro_film.mp4",
            ogg: "/assets/mp4/logo_intro_film.ovg",
            webm: "/assets/mp4/logo_intro_film.webm",
            poster: "/assets/mp4/video-bg-fallback-DTB.jpg"
        }
    });

    $(document).ready(function() {
        $(window).on('resize', function() {
            var width = $('.about-row').outerWidth();
            var maxWidth = $(window).width();
            var marginLeft = 'auto';
            if (width > maxWidth) {
                marginLeft = (maxWidth - width) / 2;
            }
            $('.about-row').css('marginLeft', marginLeft);
        }).trigger('resize');
    });
    </script>
@endsection