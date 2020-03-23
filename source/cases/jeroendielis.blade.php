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
            <h1 class="title">Keeper<h1>
                <h3 class="description">Case:</h3> <p>User Interface design voor Keeper app</p>
                  <h3 class="description">Project omschrijving:</h3>
                <p>Keeper is een persoonlijke applicatie waarmee je een overzicht behoudt 
                    van de gemaakte uren plus de gemaakte uren in een duidelijk overzicht.</p>
                    <div class="image">
                        <img src="/assets/img/keeperApp.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/keeperApp_login.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/keeperApp_login2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/keeperApp_Client_overvieuw.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="image">
                        <img src="/assets/img/keeperApp_Client.jpg" class="img-responsive" alt="">
                </div>
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
