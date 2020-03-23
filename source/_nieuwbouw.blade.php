@extends('_layouts.master')

@section('title', 'Nieuwbouw | Design Totaal Bouw')

@section('content')
    
@include('_partials.intro', [
'title' =>'Nieuwbouw SEO',
'background' => '/assets/img/img-bgs/DTB_renovatie_woning.jpg',
'scroll' => '#offerte'
])
    <section id="nieuwbouw" class="dtb-nieuwbouw">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-offset-2 text-center">
                    <h3 style="line-height:2.0em;">Onderstaande werkzaamheden worden allemaal door<br> 
                        Design Totaal Bouw zelf verricht en u heeft dus één 
                        centraal aanspreekpunt.
                    </h3>
                    <hr class="primary">
                </div>
                <div class="col-sm-4">
                    <h1 style="text-center">Nieuwbouw</h1>
                    <p>Wij bieden U onze jarenlange ervaring, overgedragen van vader op zoon, en zijn inmiddels
een vertrouwd adres voor al Uw mogelijke ( algehele ) verbouwingen:
Dus heeft u plannen om een eigen huis, kantoor 
of bedrijfspand te bouwen, of wilt U, Uw woning uitbreiden of verbouwen? Neem eens geheel vrijblijvend contact met ons op en wij kijken wat we voor u kunnen betekenen.
</p>
                </div>
                <div class="col-sm-4">
                    <h1 style="text-center">Hoe gaan wij te werk</h1>
                    <p>Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.
                        Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... 
                        Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen. </p>
                </div>
                <div class="col-sm-4">
                    <div class="nieuwbouw-dtb-foto-1"></div>
                    <div class="nieuwbouw-dtb-foto-2"></div>
                </div>
            </div>
        </div>
    </section>
    @include('_partials.usp', [
    'title' => 'Meedenkend bedrijf als het om vakwerk gaat.'
    ])
    <section id="nieuwbouw" class="dtb-nieuwbouw">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>1.   Vrijblijvend en kosteloos een professioneel advies gesprek<br> 
                    2.  Tekeningen nieuwe situatie (inrichting plattegrond)<br>
                    3.  Fundering- bekisting<br>
                    4.  Loodgieters werkzaamheden<br>
                    5.  Storten beton vloer<br>
                    6.  Verdieping vloer<br>
                    7.  Uitsparing  trap<br>
                    8.  Buiten- binnenmuren<br>
                    9.  Voegwerk<br>
                    10. Dakwerk</p>
                </div>
                <div class="col-sm-4">
                    <p>11. Trap<br>
                    12. Electra werkzaamheden <br> 
                    13. Scheidingswanden<br>
                    14. Systeemplafond / stucplafond<br>
                    15. Vloer (indien nodig egaliseren)<br>
                    16. Kozijnen en deuren<br>
                    17. Kozijnen en ramen<br>
                    18. Aftimmering totaal<br>
                    19. schilderwerk, sauswerk</p>
                    <div class="col-sm-12">
                        <div class="row">
                            <h5>Download hier onze algemene voorwaarden</h5>
                            <hr class="primary">
                            <a href="/assets/img/img-bgs/Algemene-voorwaarden-dtb.pdf" class="btn btn-primary"><span class="fa fa-download"></span> Algemene voorwaarden</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="nieuwbouw-dtb-foto-3"></div>
                    <div class="nieuwbouw-dtb-foto-4"></div>
                </div>
            </div>
        </div>
    </section>

    @include('_partials.cta', [
       'title' => 'Al onze offertes binnen een 1 uur voor u opgesteld'
    ])
    
     <section id="offerte"class="offerte-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>

                @include('_partials.contact_form') 
                </div>
            </div>          
    </section> 
    
@endsection  
