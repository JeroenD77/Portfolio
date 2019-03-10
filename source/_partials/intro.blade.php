<header class="intro-img-half intro-dark-bg" style="<?php echo !empty($background) ? 'background-image: url(' . $background . ')' : ''; ?>">
    <div class="intro-gradient"></div>
    <div class="container">
            <p class="intro-welcome"></p>
            <br>
            @if(! empty($title))
                <h1 class="brand-heading">
                     <span class="text-header">{!! $title !!}</span>
                </h1>
            @endif
            @if(! empty($scroll))
                <div data-scrollreveal="enter bottom after .6s">
                    <a href="{{ $scroll }}" class="btn btn-scroll-light sink">
                        <i class="fa fa-angle-double-down"></i>
                    </a>
                </div>
            @endif
    </div>
</header>