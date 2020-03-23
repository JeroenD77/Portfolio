<div class="work-grids-area {{ $extra_class }}" id="atom-works-grid">
    <div class=" col-sm-6 col-xs-12 atom-work-item creative corporate video no-gutter">
        <a href="{{ $link }}" class="portfolio-link" data-toggle="modal">
            <img src="{{ $image }}" alt="" class="img-responsive">
            <div class="{{ $desc_class }} project-desc text-center">
                <h5>{{ $title }}</h5>
                {!! $description !!}
            </div>
        </a>
    </div>
</div>