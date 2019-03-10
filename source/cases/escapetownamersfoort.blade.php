@extends('_layouts.master')

@section('title', 'Jeroen Dielis | Grafisch Vormgever / DTPer')

@section('content')

<!-- @include('_partials.intro', [
    'background' => '/assets/img/intro-half-img.jpg',
    'scroll' => '#klussen'
])
     -->
<section id="klussen" class="portfolio-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1 class="title">Escape Town Amersfoort<h1>
                <h3 class="description">Case:</h3> <p>Huisstijl Ontwikkeling Escape Room</p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>Voor een nieuw op de markt gebrachtte escape room moest er een nieuwe unieke indentiteit 
                ontwikkeld worden waarmee deklant zich op de markt van escape rooms kan mengen.</p>
                    <div class="image">
                        <img src="/assets/img/logo_escapetown.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/EscapeTownAmersfoort_Brochure.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/EscapeTownAmersfoort_Brochure2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/escape_town_brochure_front.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/escape_town_brochure_back.jpg" class="img-responsive" alt="">
                </div>
                <div class="image">
                        <img src="/assets/img/escape_town_flyer.jpg" class="img-responsive" alt="">
                </div>
                <div class="image">
                        <img src="/assets/img/escape_town_poster.jpg" class="img-responsive" alt="">
                </div>
                <div class="image">
                        <img src="/assets/img/escape_town_time.jpg" class="img-responsive" alt="">
                </div>
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
