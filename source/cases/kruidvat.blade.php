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
            <h1 class="title">Kruidvat en Trekpleister<h1>
                <h3 class="description">Case:</h3> <p>Opmaak diverse reclame uitingen</p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>In opdracht van Creative Media Network 
                    zijn er diverse reclame folders ontworpen en 
                    opgemaakt als mede diverse <br>aansluitende online banners voor de diverse e-comerce kanalen.</p>
                    <div class="image">
                        <img src="/assets/img/KV_kruidvat.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/KV_trekpleister.jpg" class="img-responsive" alt="">
                    </div>
                     <div class="image">
                        <img src="/assets/img/KV_banners.jpg" class="img-responsive" alt="">
                    </div>
                    <!-- <div class="image">
                        <img src="/assets/img/logo_jeroen_bg.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/logo_jeroen_bg.png" class="img-responsive" alt="">
                </div>  -->
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
