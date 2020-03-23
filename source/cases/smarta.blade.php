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
                <h1 class="title">Smarta App<h1>
                <h3 class="description">Case:</h3> <p>User Interface design voor Smarta app </p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>Voor een persoonlijk project van een interieur designster / architect uit Polen 
                    kwam het verzoek om voor een mood lamp een bijpassende <br>User Interface te ontwerpen 
                    waarmee je de lamp mee kan instellen naar de gewenste persoonlijke stemming.</p>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_main.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_login.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_home.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_work.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_relax.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_read.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_sleep.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_loading.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_user.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/SmartaUI_overview.png" class="img-responsive" alt="">
                    </div>
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
