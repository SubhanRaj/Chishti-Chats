<!--================Forum Breadcrumb Area =================-->
@props(['title', 'url'])

<section class="page_breadcrumb">
    <div class="container-fluid pl-60 pr-60">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item @if(request()->is($url)) active @endif" aria-current="page">
                            @if(isset($url))
                            <a href="{{ $url }}">{{ $title }}</a>
                            @else
                            {{ $title }}
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i> Updated on {{ date('d M, Y') }}</a>
            </div>
        </div>
    </div>
</section>

<!--================End Forum Breadcrumb Area =================-->