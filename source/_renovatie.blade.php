@extends('_layouts.master')

@section('title', 'Renovatie | Design Totaal Bouw')

@section('content')
    
@include('_partials.intro', [
'title' =>'Nieuwbouw SEO',
'background' => '/assets/img/img-bgs/DTB_renovatie_woning.jpg',
'scroll' => '#offerte'
])
<section id="renovatie" class="dtb-renovatie">
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
                    <h1 style="text-center">Renovatie</h1>
                    <p>Het kan zijn dat Uw woning of bedrijfspand niet meer voldoet aan de veiligheidseisen, dat er een herindeling of samenvoeging nodig is of dat de staat van de woning of bedrijfspand dermate slecht is dat deze gerenoveerd moet worden.
                     Wij zijn uitgerust met het benodigde gereedschap en de materialen en verzorgen voor U alle kleine en grote onderhoud- en renovatieklussen. Van het vernieuwen van de kozijnen tot het volledig renoveren van Uw bedrijfspand of woning.</p>
                </div>
                <div class="col-sm-4">
                    <h1 style="text-center">Plan van aanpak</h1>
                    <p>Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen.Heeft u interesse gekregen in ons bedrijf? En wilt u graag een offerte naar uw wens op maat laten maken... Vul hiernaast uw gegevens zo uitgebreidt mogelijk in en wij zullen dan z.s.m contact met uw opnemen. </p>
                </div>
                <div class="col-sm-4">
                    <div class="renovatie-dtb-foto-1"></div>
                    <div class="renovatie-dtb-foto-2"></div>
                </div>
            </div>
        </div>
    </section>
    @include('_partials.usp', [
    'title' => 'Meedenkend bedrijf als het om vakwerk gaat.'
    ])
    <section id="renovatie" class="dtb-renovatie">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>32.  Vrijblijvend en kosteloos een professioneel advies gesprek<br> 
                    33. Tekeningen voor kantoor / woonruimte nieuwe situatie (inrichting plattegrond)<br>
                    34. Verwijderen van meubelen indien nodig<br>
                    35. Sloopwerkzaamheden ( bestaand kantoor / woonruimte )<br>
                    36. Loodgieters werkzaamheden<br>
                    37. Electra werkzaamheden  ( data bekabeling indien nodig )<br>
                    38. Systeemplafond / stucplafond<br>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>39. Vloer (indien nodig egaliseren)<br>
                    40. Scheidingswanden<br>
                    41. Kozijnen en deuren<br>
                    42. Kozijnen en ramen<br>
                    43. Aftimmering totaal<br>
                    44. schilderwerk, sauswerk<br>
                    45. Gevel renovatie ( metsel- voegwerkzaamheden, gevelbeplating )<br>
                    46. Leggen van vloerbedekking, pakket, laminaat, marmoleum en vloertegels.<br></p>
                    <div class="col-sm-12">
                        <div class="row">
                            <h5>Download hier onze algemene voorwaarden</h5>
                            <hr class="primary">
                            <a href="/assets/img/img-bgs/Algemene-voorwaarden-dtb.pdf" class="btn btn-primary"><span class="fa fa-download"></span> Algemene voorwaarden</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="renovatie-dtb-foto-3"></div>
                    <div class="renovatie-dtb-foto-4"></div>
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
