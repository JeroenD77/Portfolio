@extends('_layouts.master')

@section('title', 'Contact | Design Totaal Bouw')

@section('content')
    
@include('_partials.intro', [
'background' => '/assets/img/img-bgs/DTB_renovatie_woning.jpg',
'scroll' => '#offerte'
])
    @include('_partials.cta', [
       'title' => 'Al onze offertes binnen een 1 uur voor u opgesteld'
    ])
<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Onze openingstijden</h1>
                    <hr class="custom">
                     <table class="table">
                    <td>Maandag</td>
                    <td>07:00 – 16:00 uur</td>
                    <tr>
                    <td>Dinsdag</td>
                    <td>07:00 - 16:00 uur</td>
                    </tr>
                    <tr>
                    <td>Woensdag</td>
                    <td>07:00 – 16:00 uur</td>
                    </tr>
                    <tr>
                    <td>Donderdag</td>
                    <td>07:00 - 16:00 uur</td>
                    </tr>
                    <tr>
                    <td>Vrijdag</td>
                    <td>07:00 – 16:00 uur</td>
                    </tr>
                    <tr>
                    <td>Zaterdag</td>
                    <td>Gesloten</td>
                    </tr>
                    <tr>
                    <td>Zondag</td>
                    <td>Gesloten</td>
                    </tr>
                    </table>
                    </div>
                <div class="col-sm-8">
                    <h1 style="text-center">Waar zijn wij te vinden</h1>
                    <div class="kaartje"><img src="/assets/img/img-bgs/dtb-geo-locatie.jpg" alt class="img-responsive"></div>
                </div>
            </div>
            <div class="row">
                <hr class="custom">
                <div class="col-sm-3">
                <a href="https://www.facebook.com/DesignTotaalBouw" class="btn btn-social-dark btn-facebook"><i class="fa fa-fw fa-facebook"></i></a>
                <a href="https://twitter.com/DTB_Bouw" class="btn btn-social-dark btn-twitter"><i class="fa fa-fw fa-twitter"></i></a>
                 <a href="https://nl.linkedin.com/in/dtb-bouw-74ab77113" class="btn btn-social-dark btn-linkedin"><i class="fa fa-fw fa-linkedin"></i></a>
            </div>
            <div class="col-sm-3">
                <h>Adres:</h><br>
                Habanerastraat 31<br>
                1448 VJ Purmerend<br>
            </div>
            <div class="col-sm-3">
               <h>Telefoon:</h>
                    <p> +31 (0) 6 142 386 62<br>
            </div>
              <div class="col-sm-3">
                <h>E-mail:</h><br>
                 <a href="mailto:info@dtb.amsterdam">info@dtb.amsterdam</a><br>
                BTW-nummer:<br>
                NL213347404B01<br>
                KvK nr.<br>63558661
            </div>
        </div>
        </div>
    </section>

@endsection 