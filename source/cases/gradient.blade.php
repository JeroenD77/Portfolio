@extends('_layouts.master')

@section('title', 'Jeroen Dielis | Grafisch Vormgever / DTPer')

@section('content')

<!-- @@include('_partials.intro', [
    'background' => '/assets/img/intro-half-img.jpg',
    'scroll' => '#klussen'
]) -->
    
<section id="klussen" class="portfolio-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1 class="title">Gradient App<h1>
                <h3 class="description">Case:</h3> <p>Design & development interne communicatie app</p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>Binnen onze organisatie was er nog veel 
                    cohensie binnen de verschillende afdelingen, mede daardoor hebben mijn team en ik 
                    besloten om dit te doorbreken door middel van een stand-up applicatie te ontwikkelen 
                    waardoor het persooneel gekoppeld wordt aan 5 andere om een korte disscussie met elkaar 
                    aan te gaan om zo een duidelijker beeld te krijgen wat er op de afdelingen zich afspeelt. </p>
                    <div class="image">
                        <img src="/assets/img/logo_gradient_app.png" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/gradient_home.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/gradient_sidemenu.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/gradient_profile.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/gradient_profile2.jpg" class="img-responsive" alt="">
                </div>
                <div class="image">
                        <img src="/assets/img/gradient_intern.jpg" class="img-responsive" alt="">
                </div>
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
