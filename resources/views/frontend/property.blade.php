@extends('layouts.app')
@section('content_box')
   {{--   <img style="max-height: 513px" class="w-100"
        src="{{ $item->fe_image ? asset('/storage/property/' . $item->fe_image) : asset('/storage/property/' . $item->image) }}"
        alt="{{ $item->title }}">--}}
    <div class="container">
        <div class=" ">

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 mt-0 p-4">
                        <div class="col-12 mb-3">
                             <h1>{{ $title }}</h1>
                        </div>
                        <div class="row g-0 mb-2  ">
                            <div class="col-md-4 ">

                                <img class="img-fluid rounded-start    " style="cursor: pointer; height: 350px; width: 550px"
                                    data-fancybox="gallery" data-src="{{ asset('/storage/property/' . $item->image) }}"
                                    src="{{ asset('/storage/property/' . $item->image) }}" alt="{{ $item->title }}">

                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">


                                                <h3 class="card-title"><i class="fas fa-tag"></i> prix :

                                                    {{ number_format($item->price) }} DH
                                                    @if ($item->purpose != 'sale')
                                                         en Mois
                                                    @endif
                                                </h3>


                                        </div>
                                        <div class="col-12 mb-3">
                                            <p class="card-text mb-1">
                                                <a class="btn btn-sm btn-outline-dark"
                                                    href="{{ route('show_category', $item->Cate->slug_name) }} ">
                                                    {{ $item->Cate->name }}
                                                </a>
                                                <a class="btn btn-sm btn-outline-secondary"
                                                    href="{{ route('show_city', $item->City->slug_city) }}">
                                                    {{ $item->City->city }}
                                                </a>
                                                @if ($status)
                                                    <a class="btn btn-sm @if (!empty($saved)) @if (in_array($item->title_slug, $saved)) btn-success
                                                @else
                                                    btn-outline-success @endif
                                                @else
                                                zbtn-outline-success
                                                @endif
                                                    save_pro"
                                                        href="{{ route('save_pro_ajax', [$item->title_slug, $item->id]) }}">
                                                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        <span class="save_pro_text">
                                                            @if (!empty($saved))
                                                                @if (in_array($item->title_slug, $saved))
                                                                    enregistré
                                                                @else
                                                                    enregistrer
                                                                @endif
                                                            @else
                                                                enregistrer
                                                            @endif
                                                        </span>
                                                    </a>
                                                @endif

                                            </p>
                                            <div class="card-body">
                                                <h5 class="card-title"><i class="fas fa-sign"></i> à
                                                    {{ ucfirst($item->purpose) }}...
                                                </h5>


                                                <p class="card-text">
                                                <h5> <i class="fas fa-bed"></i> Chambre : {{ $item->rooms }}</h5>
                                                <h5> <i class="fas fa-shower"></i> Salle de bains : {{ $item->bathrooms }}
                                                </h5>
                                                <h5 class="card-title"><i class="fas fa-map"></i> Adresse :
                                                    {{ $item->address }} </h5>
                                                </p>
                                                <div class="col-12 mb-3">
                                                    <h5 class="card-title">
                                                        <i class="fas fa-address-book"></i> Contact :
                                                        <a href="tel:{{ $item->cont_ph }}"
                                                            class="btn btn-light mb-1 w-auto  ">
                                                            <i class="fas fa-phone-alt"></i> {{ $item->cont_ph }}
                                                        </a>
                                                        <a href="mailto:{{ $item->cont_em }}"
                                                            class="btn btn-light mb-1 w-auto">
                                                            <i class="fas fa-envelope"></i> {{ $item->cont_em }}
                                                        </a>
                                                    </h5>
                                                    {{--   <h5 class="card-title"><i class="fas fa-th-large"></i>
                                                        Area : {{ number_format($item->area) }} Sq. Ft.
                                                    </h5> --}}
                                                    <div class="row">
                                                        <div class="col-6">

                                                        </div>
                                                        <div class="col-6">

                                                        </div>
                                                    </div>
                                                </div>
                                                @if (!empty($faci))
                                                    <div class="col-12 mb-3">
                                                        <h5 class="card-title">
                                                            <i class="fas fa-shapes"></i> Facilities :
                                                            @foreach ($faci as $fac)
                                                                @if ($fac)
                                                                    <button
                                                                        class="btn btn-outline-{{ $fac->color }} m-1 mb-2">
                                                                        {!! $fac->fa !!} {{ $fac->faci }}
                                                                    </button>
                                                                @endif
                                                            @endforeach
                                                        </h5>

                                                    </div>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        @if (!empty($gals))
                                            <div class="row">
                                                <div class="col-2">
                                                    <h5 class="card-title"><i class="fas fa-images"></i> Gallary :
                                                    </h5>
                                                </div>
                                                <div class="col-12">
                                                    <div class="carousel">
                                                        @forelse ($gals as $gal)
                                                            <div class="carousel__slide">
                                                                <img class="  rounded" height="350px" width="1050px"
                                                                    src="{{ asset('/storage/gallary/' . $gal->pro_id . '/' . $gal->gal_image) }}"
                                                                    data-fancybox="gallery"
                                                                    data-src="{{ asset('/storage/gallary/' . $gal->pro_id . '/' . $gal->gal_image) }}"
                                                                    alt="Error">
                                                            </div>
                                                        @empty
                                                            <h5>Aucune image téléchargée</h5>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2 border-bottom card-body">

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <div class="row g-0 mb-2 card-body">
                                                    <div class="col-">
                                                        <div class="card-body">

                                                            <h5>Description :</h5>
                                                            <p class="card-text" style="text-align: justify">
                                                                {{ $item->description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <h5 class="card-text"> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- VIDEO -->

                                                @if (!empty($item->map))
                                                    <div class="row g-0 mb-2   ">
                                                        <div class="col-12 mb-2">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><i class="fab fa-youtube"></i> vidéo
                                                                    :
                                                                    <a class=" "
                                                                        href=" {!! $item->video !!}">
                                                                        Click here
                                                                    </a>

                                                                </h5>
                                                            </div>

                                                        </div>


                                                    </div>
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row g-0 mb-2   card-body">
                                <div class="col-">
                                    <div class="card-body">

                                        @if (!empty($item->map))
                                        <div class="row g-0 mb-2 border-bottom card-body">
                                            <div class="col-12 mb-2">
                                                <div class="card-body">
                                                    <h5 class="card-title"><i class="fas fa-map-marked-alt"></i> Map :</h5>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="card-body">
                                                    {{-- <div class="ratio ratio-21x9"> --}}
                                                        {!! $item->map !!}
                                                    {{-- </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    </div>
                                </div>
                            </div>

                            <div class="row g-0 mb-2 card-body">
                                <div class="col-12 mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-comment-alt"></i> Commentaires</h5>
                                    </div>
                                </div>
                                @if ($status)
                                    <div class="col-12 mb-2">
                                        <form action="" id="review_form" class="card-body">
                                            @csrf
                                            <div class="row">
                                                <div class="col-1 text-center mb-2">
                                                    <a href="{{ route('UserProfile') }}">
                                                        <img class="rounded-circle"
                                                            src="{{ !empty($user['data']['image']) ? asset('/storage/userdata/' . $user['data']['image']) : asset('stockUser.png') }}"
                                                            width="60px" alt="No Img">
                                                    </a>
                                                    <a href="{{ route('UserProfile') }}" class="text-decoration-none">
                                                        <p class="m-0 text-muted">{{ $user['name'] }}</p>
                                                    </a>
                                                </div>
                                                <div class="col-11 mb-2">
                                                    <textarea name="review_text" id="review_form_input" class="form-control h-100"
                                                        placeholder="Enter Your Review here..." required></textarea>
                                                    <div id="review_form_btns" class="mt-2">
                                                        <div class="d-flex">
                                                            <button class="btn btn-success btn-sm ms-auto">Envoyée</button>
                                                            <button id="review_cancel"
                                                                class="btn btn-outline-danger btn-sm ms-2">Annuler</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @forelse ($user_reviews as $userrev)
                                        {{-- @if ($userrev['pro_id'] == $item->id) --}}
                                        <div id="review{{ $userrev['id'] }}" class="col-12 mb-2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-1 text-center mb-2">
                                                        <a href="{{ route('UserProfile') }}">
                                                            <img class="rounded-circle"
                                                                src="{{ !empty($user['data']['image']) ? asset('/storage/userdata/' . $user['data']['image']) : asset('stockUser.png') }}"
                                                                width="60px" alt="No Img">
                                                        </a>
                                                        <a href="{{ route('UserProfile') }}"
                                                            class="text-decoration-none">
                                                            <p class="m-0 text-muted">{{ $user['name'] }}</p>
                                                        </a>
                                                    </div>
                                                    <div class="col-11 mb-2">
                                                        {{ $userrev['review'] }}
                                                        <div class="mt-2">
                                                            <div class="d-flex">
                                                                {{-- <button
                                                                    class="btn btn-success btn-sm ms-auto">Edit</button> --}}
                                                                <button id="review_delete" data-id="{{ $userrev['id'] }}"
                                                                    class="btn btn-outline-danger btn-sm ms-auto">Supprimer</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endif --}}
                                    @empty
                                        <div class="col-12 mb-2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 mb-2 text-center">
                                                        <h5>Pas de commentaires de votre part...</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse

                                @endif
                                @forelse ($reviews as $review)
                                    <div class="col-12 mb-2">
                                        <div class="card-body">
                                            <div class="row mb-1">
                                                <div class="col-1 text-center mb-2">
                                                    <img class="rounded-circle"
                                                        src="{{ !empty($review->Users[0]->Data->image) ? asset('/storage/userdata/' . $review->Users[0]->Data->image) : asset('stockUser.png') }}"
                                                        width="60px" alt="No Img">
                                                    {{ $review->Users[0]->name }}
                                                </div>
                                                <div class="col-11 mb-2">
                                                    {{ $review->review }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 mb-2">
                                        <div class="row">
                                            <div class="col-12 mb-2 text-center">
                                                <h5> pas encore de commentaires de personnes...</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('iframe').addClass('d-block mx-auto');
            $('iframe').css('width', '100%');
            $('iframe').css('height', '25em');
            // console.log('hello');

            Fancybox.bind("gallery", {});
            const myCarousel = new Carousel(document.querySelector(".carousel"), {});

            $(document).on('click', '.save_pro', function(e) {
                e.preventDefault();
                var $this = $(this);
                var url = $(this).attr('href');
                var text = $(this).find('.save_pro_text').html().trim();

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        if (response) {
                            $this.find('.save_pro_text').html('enregistré');
                            $this.addClass('btn-success').removeClass('btn-outline-success');
                        } else {
                            $this.find('.save_pro_text').html('enregistrer');
                            $this.addClass('btn-outline-success').removeClass('btn-success');
                        }
                    }
                });
            });
            @if ($status)
                $('#review_form_btns').hide();
                $(document).on('focus', '#review_form_input', function(e) {
                    e.preventDefault();
                    $('#review_form_btns').fadeIn(100);
                });
                $(document).on('click', '#review_cancel', function(e) {
                    e.preventDefault();
                    $('#review_form_btns').fadeOut();
                    $('#review_form_input').val('');
                });
                $(document).on('submit', '#review_form', function(e) {
                    e.preventDefault();
                    var formdata = $('#review_form').serializeArray();
                    formdata.push({
                        name: 'u_id',
                        value: {{ $user['id'] }}
                    }, {
                        name: 'pro_id',
                        value: {{ $item->id }}
                    })
                    // console.log(formdata);
                    $.ajax({
                        type: "POST",
                        url: "{{ route('add_review') }}",
                        data: formdata,
                        success: function(response) {
                            location.reload();
                        }
                    });
                });
                $(document).on('click', '#review_delete', function(e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    console.log('delete ' + id);
                    $.ajax({
                        type: "GET",
                        url: `{{ route('del_review') }}/${id}`,
                        success: function(response) {
                            location.reload();
                        }
                    });
                });
            @endif

        });
    </script>
@endsection
