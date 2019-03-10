@extends('_layouts.master')

@section('title', 'Onderhoud | Design Totaal Bouw')

@section('content')
    
@include('_partials.intro', [
'title' =>'Onderhoud SEO',
'background' => '/assets/img/img-bgs/DTB_renovatie_woning.jpg',
'scroll' => '#offerte'
])
<section id="onderhoud" class="dtb-onderhoud">
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
                    <h1 style="text-center">Onderhoud</h1>
                    <p>Onderhoud werkzaamheden worden allemaal door Design Totaal Bouw zelf verricht en u heeft dus één centraal aanspreekpunt. U kunt kiezen uit 4 verschillende onderhoud contracten. ( 1x per maand – 1x per kwartaal – 1x per half jaar - 1x per jaar )                                                                                            Vooraf vast te leggen waar het onderhoud uit bestaat, onderhoud binnen het betreffende pand of ook onderhoud buitenzijde pand en dak.  Onder onderhoud worden meestal de kleine werkzaamheden verstaan, bijv. het nalopen van toiletten op lekkage, vervangen van eventueel gebroken tegels, nalopen van stucwerk, het controleren op houtrot en daken vrij maken van bladeren e.d. 
Mochten er werkzaamheden verricht moeten worden die van grotere omvang zijn dan nemen wij eerst contact met de desbetreffende persoon op. U ontvangt dan van ons een vrijblijvende offerte.</p>
                </div>
                <div class="col-sm-4">
                    <h1 style="text-center">Plan van aanpak</h1>
                    <p>Onderhoud werkzaamheden worden allemaal door Design Totaal Bouw zelf verricht en u heeft dus één centraal aanspreekpunt. U kunt kiezen uit 4 verschillende onderhoud contracten. ( 1x per maand – 1x per kwartaal – 1x per half jaar - 1x per jaar )                                                                                            Vooraf vast te leggen waar het onderhoud uit bestaat, onderhoud binnen het betreffende pand of ook onderhoud buitenzijde pand en dak.  Onder onderhoud worden meestal de kleine werkzaamheden verstaan, bijv. het nalopen van toiletten op lekkage, vervangen van eventueel gebroken tegels, nalopen van stucwerk, het controleren op houtrot en daken vrij maken van bladeren e.d. 
Mochten er werkzaamheden verricht moeten worden die van grotere omvang zijn dan nemen wij eerst contact met de desbetreffende persoon op. U ontvangt dan van ons een vrijblijvende offerte.</p>
                </div>
                <div class="col-sm-4">
                    <div class="onderhoud-dtb-foto-1"></div>
                    <div class="onderhoud-dtb-foto-2"></div>
                </div>
            </div>
        </div>
    </section>
    @include('_partials.usp', [
    'title' => 'Meedenkend bedrijf als het om vakwerk gaat.'
    ])
    <section id="onderhoud" class="dtb-onderhoud">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>39. Vloer (indien nodig egaliseren)<br>
                    40. Scheidingswanden<br>
                    41. Kozijnen en deuren<br>
                    42. Kozijnen en ramen<br>
                    43. Aftimmering totaal<br>
                    44. schilderwerk, sauswerk<br>
                    45. Gevel renovatie ( metsel- voegwerkzaamheden, gevelbeplating )<br>
                    46. Leggen van vloerbedekking, pakket, laminaat, marmoleum en vloertegels.<br></p>
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
                    <div class="onderhoud-dtb-foto-3"></div>
                    <div class="onderhoud-dtb-foto-4"></div>
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
