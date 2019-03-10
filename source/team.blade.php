@extends('_layouts.master')

@section('title', 'About me | Jeroen Dielis')

@section('content')
    
@include('_partials.intro', [
'background' => '/assets/img/sky_blue.jpg'
])


<section id="over-mij">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
            <h1>Jeroen Dielis</h1>
                <p> Functie: Grafisch Vormgever / Desktop Publisher</p>
                <p>"Creatieve Eind Baas"</p>
                <hr class="primary"></hr>
                    <div class="profiel-1">
                </div>
            </div>
         </div>
                <div class="col-sm-12">
                <hr class="primary"></hr>
                <p>Hoi ik ben Jeroen een sportieve en ambitieuze man van 29 jaar oud, die ervan houdt om het maximale eruit te halen in zowel sport als tijdens het werk. 
                    In mijn vrije tijd ben ik vaak te vinden in de sportschool. en kickboks ik 3 a 4 keer in de week en hou ik van goede films en boeken. 
                    Als het om mijn werk gaat ben ik een gedreven persoon waarin ik de wil heb om mezelf te blijven ontwikkelen en aan te passen aan de continue veranderingen uit mijn vakgebied, 
                    hierdoor hou ik mij dagelijks bezig met wat er speelt op het gebied van technologie, design en development en speel hierop in door nieuwe programma’s te leren 
                    wanneer ik deze nodig acht te hebben. De afgelopen jaren is mijn passie steeds meer gegroeid naar het ontwerpen van online commerciële uitingen, 
                    hierbij denkend aan het ontwikkelen van websites tot applicaties.
                </p>
                <p>Gedurende mijn periode als CEB (Creatieve eind baas) heb ik aan diverse offline/online projecten gewerkt. 
                    Voor een kijkje in mijn portfolio verwijs ik u graag naar mijn portfolio gedeelte.
                    Mocht u interresse hebben om met mij samen te werken dan kunt u mij bereiken op het onderstaande nummer, of een mail sturen.</p>
                  <ul class="list-inline">
                        <li>
                        <h5>Telefoon nummer:</h5>
                        <a class="btn btn-primary" href="tel:+310620085810">+31 (0)620 08 85 10</a></br>
                        </li>
                        <li>
                        <h5>E-mail adres:</h5>
                        <a class="btn btn-primary" href="mailto:info@jeroendielis.nl">stuur mail</a> 
                        </li>
                    <ul>
                    <hr class="primary"></hr>
                </div>
    </div>
</section>

@endsection