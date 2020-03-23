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
            <h1 class="title">De kleine Valk<h1>
                <h3 class="description">Case:</h3> <p>Ontwikkeling nieuw huisstijl</p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>Voor een pitch van de kleine Valk is er een nieuw logo ontwikkeld die een moderne 
                    look en feel heeft gekregen. <br>Als mede is er ook een nieuwe menu kaart ontworpen waarin 
                    de nieuwe stijl verwerkt is.</p>
                    <div class="image">
                        <img src="/assets/img/dekleinevalk_logo.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/dekleinevalk_visk.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/dekleinevalk_menu_back.jpg" class="img-responsive" alt="">
                </div>
                    <div class="image">
                        <img src="/assets/img/dekleinevalk_menu_front_2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/dekleinevalk_menu_front.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/dekleinevalk_menu_back_2.jpg" class="img-responsive" alt="">
                </div>

                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
