@extends('_layouts.master')

@section('title', 'Jeroen Dielis | Grafisch Vormgever / DTPer')

@section('content')

<!-- @include('_partials.intro', [
    'background' => '/assets/img/intro-half-img.jpg',
    'scroll' => '#klussen'
]) -->
    
<section id="klussen" class="portfolio-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1 class="title">Design Totaal Bouw<h1>
                <h3 class="description">Case:</h3> <p>Ontwikkeling van nieuwe indentiteit</p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>Design Totaal Bouw is een startende 
                    onderneming en had nog geen eigen visuele indentiteit. <br>Om hier verandering 
                    in te brengen moest er een complete stijl neergeled worden die een unieke uitstraling 
                    had ten opzichte van hun concurentie.</p>
                    <div class="image">
                        <img src="/assets/img/DTB_logo_overview.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/DTB_huisstijl_mockup.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/DTB_offertemap.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/DTB_flyer_front.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/DTB_flyer_back.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/DTB_overview.jpg" class="img-responsive" alt="">
                </div>
                <div class="image">
                        <img src="/assets/img/DTB_banner.jpg" class="img-responsive" alt="">
                </div>
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
