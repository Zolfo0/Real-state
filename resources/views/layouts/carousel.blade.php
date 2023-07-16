
<style>
    .img-gradient {
  position:relative;
}


.img-gradient::after {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: linear-gradient(rgba(13, 13, 13, 0),rgba(0, 0, 0, 0.793));
}
</style>

<div id="myCarousel" class="carousel slide mلا-2" data-bs-ride="carousel" >
    <div class="carousel-indicators">
        @foreach ($featuredPro as $key => $item)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}"
                aria-label="Slide {{ $key + 1 }}"
                @if ($key == 0) class="active" aria-current="true" @endif></button>
        @endforeach

    </div>
    <div class="carousel-inner" >
        @foreach ($featuredPro as $key => $item)
            <div class="carousel-item img-gradient @if ($key == 0) active @endif"   >
                <img class="bd-placeholder-img"
                    src="{{ $item->fe_image ? asset('/storage/property/' . $item->fe_image) : asset('/storage/property/' . $item->image) }}"
                    alt="{{ $item->title }}" >
                <div class="container">
                    <div class="carousel-caption  ">
                        <h2 style="text-shadow: 3px 3px 3px black;">{{ $item->title }} {{ number_format($item->price) }} DH</h2>
                        <p>
                          {{--  {{ ucfirst($item->description) }}

                            <a class="btn btn-sm btn-outline-success" href="{{ route('show_purpose', $item->purpose) }}">
                                {{ ucfirst($item->purpose) }}
                            </a>
                            <a class="btn  btn-sm btn-outline-warning"
                                href="{{ route('show_category', $item->Cate->slug_name) }}">
                                {{ $item->Cate->name }}
                            </a>
                            <a class="btn btn-sm btn-outline-info" href="{{ route('show_city', $item->City->slug_city) }}">
                                {{ $item->City->city }}
                            </a>  --}}
                        </p>

                        <p><a class="btn btn-sm btn-outline-primary" href="{{ route('show_pro', $item->title_slug) }} ">voir
                                plus</a></p>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
