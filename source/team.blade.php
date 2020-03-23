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
                <hr class="primary">
                <div class="profile-1">   
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
                 <article>Hoi, Mijn naam is Jeroen en ben een sportieve en ambitieuze man van 30 jaar. 
                Ik hou ervan om het maximale eruit te halen in zowel sport als tijdens het werk. In mijn vrije tijd ben ik vaak te vinden in de sportschool. 
                Daarnaast kickboks ik nog 3 keer in de week en hou ik van goede films en boeken. Als het om mijn werk gaat ben ik een gedreven persoon waarin 
                ik de wil heb om mezelf te blijven ontwikkelen en aan te passen aan de continue veranderingen uit mijn vakgebied. 
                Hierdoor hou ik mij dagelijks bezig met wat er speelt op het gebied van technologie, design en development en speel hierop in door nieuwe programma’s te leren wanneer 
                ik deze nodig acht te hebben. De afgelopen jaren is mijn passie steeds meer gegroeid naar het ontwerpen van online commerciële uitingen, 
                hierbij denkend aan het ontwikkelen van social media uitingen, websites en applicatie design. Ook het creëren van offline communicatie materiaal behoort tot een van mijn creatieve passies.
                </article>
                </div>
                <div class="col-sm-6">
                <article>Gedurende mijn periode als CEB (Creatieve Eind Baas) heb ik aan diverse offline/online projecten gewerkt. 
                    Voor een kijkje in mijn achtertuin verwijs ik u graag naar mijn portfolio.
                    Mocht u interresse hebben om met mij samen te werken dan kunt u mij bereiken op het onderstaande nummer, of een mail sturen.</article>
                </div>
                <div class="col-sm-12"><hr class="primary"></div>
        </div>
    </div>
</section>

@endsection