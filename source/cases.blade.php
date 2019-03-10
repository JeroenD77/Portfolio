@extends('_layouts.master')

@section('title', 'Portfolio | Jeroen Dielis')

@section('content')

<!-- @include('_partials.intro', [
'background' => '/assets/img/img-bgs/DTB_renovatie_woning.jpg'
]) -->
    
    <section id="portfolio" class="portfolio-1">
        <div class="container-fluid no-gutter">
            <div class="col-lg-12 text-center">
                <h2>Hier vind u een uitgebreide selectie van mijn portfolio</h2>
                <hr class="primary">
            </div>

            @foreach($projects as $item)
                @include('_partials.home.project_item', $item)
            @endforeach
            
        </div>
    </section>
    
@endsection  
