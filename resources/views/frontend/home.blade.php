@extends('layouts.app')
@push('title')
    {{ $CMS['home_title'] ?? '' }}
@endpush
@push('meta')
    {{ $CMS['home_meta'] ?? '' }}
@endpush
@section('content_box')
    <main>
        @include('layouts.carousel')

        <div class="container marketing">

            <div class="row featurette mb-3">
                <div class="col-12">
                    <h1>Immobilier neuf</h1>
                </div>
            </div>


            <div class="row featurette">
                @forelse ($newlyAdded as $item)
                    <div class="col-3 mb-3 card-container " >
                        <div class="card mx-auto shadow zoom " >
                            <a href="{{ route('show_pro', $item->title_slug) }}">
                                <img height="250px" class="card-img-top"
                                    src="{{ asset('/storage/property/' . $item->image) }}" alt="{{ $item->title }} ">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $item->title }} {{ number_format($item->price) }} DH</h5>
                                <p class="card-text mb-1">
                                    <a class="btn btn-sm btn-outline-primary"
                                        href="{{ route('show_purpose', $item->purpose) }}">
                                        {{ ucfirst($item->purpose) }}
                                    </a>
                                    <a class="btn btn-sm btn-outline-secondary"
                                        href="{{ route('show_category', $item->Cate->slug_name) }}">
                                        {{ $item->Cate->name }}
                                    </a>
                                    <a class="btn btn-sm btn-outline-dark"
                                        href="{{ route('show_city', $item->City->slug_city) }}">
                                        {{ $item->City->city }}
                                    </a>
                                </p>
                                <p class="card-text">
                                    <i class="fas fa-bed"></i> {{ $item->rooms }}
                                    <i class="fas fa-shower"></i> {{ $item->bathrooms }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    {{-- <div class="card mx-auto shadow">
                        <div class="card mx-auto shadow"> --}}
                    <h4>Rien de nouveau ajouté récemment...</h4>
                    {{-- </div>
                    </div> --}}
                @endforelse
            </div>
            <!--section-->

            <div class="album py-2 bg-light">
                <main>
                    <div class="container">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3   h-100">
                            <div class="col bg-light  card-container p-4">
                                <div class="card shadow-sm    zoom ">
                                    <div class="m-4 p-2">
                                        <div class="">
                                            <img src="images/Buy_new.png" class="" alt="" srcset=""
                                                style="border-radius: 5px;width:335px;height: 200px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-4 ">
                                        <h4 class=" text-primary text-center">Acheter un bien immobilier</h4>
                                        <p class="card-text text-center">Trouvez votre place avec une expérience photo immersive et le plus grand nombre d'annonces.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="container btn-group pt-4">
                                                <button type="button" class="btn btn-5 btn-outline-primary ">plus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col bg-light  card-container p-4">
                                <div class="card shadow-sm    zoom ">
                                    <div class="m-4 p-2">
                                        <div class="">
                                            <img src=" images/Rent_new.png " class="" alt="" srcset=""
                                                style="border-radius: 5px;width:335px;height: 200px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-4 ">
                                        <h4 class=" text-primary text-center"> Vente un bien immobilier </h4>
                                        <p class="card-text text-center">Peu importe le chemin que vous empruntez pour vendre votre maison, nous pouvons vous aider à réussir la vente.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="container btn-group pt-4">
                                                <button type="button" class="btn btn-5 btn-outline-primary ">plus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col bg-light  card-container p-4">
                                <div class="card shadow-sm    zoom ">
                                    <div class="m-4 p-2">
                                        <div class="">
                                            <img src="images/Sell_new.png " class="" alt="" srcset=""
                                                style="border-radius: 5px;width:335px;height: 200px;">
                                        </div>
                                    </div>
                                    <div class="card-body p-4 ">
                                        <h4 class=" text-primary text-center"> Louer un bien immobilier</h4>
                                        <p class="card-text text-center">Nous créons une expérience en ligne transparente  des achats sur le plus grand réseau de location,
                                            à la demande .</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="container btn-group pt-4">
                                                <button type="button" class="btn btn-5 btn-outline-primary ">plus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </main>
            </div>



            <hr class="featurette-divider">



            <!-- Three columns of text below the carousel -->

            <div class="row w-100">
                <div class="col-12 mb-2 text-center">
                    <h1>Catégories</h1>
                </div>
                <div id="cat_cara" class="carousel ">
                    @forelse ($showcate as $item)
                        <div class="carousel__slide  card-container " style="width: 350px">

                            <div class="shadow w-100 mx-auto zoom">
                                <a class="" href="{{ route('show_category', $item->slug_name) }}">
                                    <img style="height: 100%" class="w-100 rounded-top"
                                        src="{{ asset('/storage/images/' . $item->image) }}" alt="{{ $item->name }}">
                                </a>
                                <a class="btn btn-outline-primary rounded-bottom btn-lg w-100"
                                    href="{{ route('show_category', $item->slug_name) }}">{{ $item->name }}</a>
                            </div>

                        </div>
                    @empty
                        <div class="carousel__slide" style="width: 350px">
                            <div class="shadow w-100 mx-auto">
                                <a class="" href="{{ route('show_category', $item->slug_name) }}">
                                    <img style="height: 100%" class="w-100 rounded-top"
                                        src="{{ asset('/storage/images/' . $item->image) }}" alt="{{ $item->name }}">
                                </a>
                                <a class="btn btn-outline-primary rounded-bottom btn-lg w-100" href="">No
                                    Catégories</a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div><!-- /.row -->





        </div>
            <div class=" bg-white p-5 m-1">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Trouvez votre appartement de location idéal.
                        </h2>
                        <p class="lead">Vous cherchez une location d'appartement confortable et pratique ?
                            Nous avons une large sélection d'appartements de haute qualité disponibles à la location.
                            Que vous soyez un étudiant, un jeune professionnel ou une famille, nous avons des options
                            qui répondent à vos besoins. Notre équipe vous aidera à trouver le bon
                            l'emplacement, les commodités et le budget qui correspondent à vos préférences. Apprécier
                            location sans tracas avec nos services de gestion immobilière réactifs et un entretien rapide
                            soutien.
                            Faites le premier pas vers votre espace de vie idéal et trouvez votre appartement locatif parfait
                            aujourd'hui.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="images\Rent_new.png" style="width: 500px;height:500px ;border-radius:10px" alt="Image">


                    </div>
                </div>
            </div>




            <div class="container marketing">
            @forelse ($catedata as $key => $cate)
                @if (sizeof($cate->Pro) > 0)

                    <div class="row featurette mb-4">
                        <div class="col-12">
                            <a class="text-decoration-none text-secondary" href="">
                                <h1 class="">
                                    {{ $cate->name }}
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="row featurette">
                        @foreach ($cate->Pro as $item)
                            <div class="col-4 mb-4">
                                <div class="card mx-auto shadow">
                                    <a href="{{ route('show_pro', $item->title_slug) }}">
                                        <img height="300px" class="card-img-top"
                                            src="{{ asset('/storage/property/' . $item->image) }}"
                                            alt="{{ $item->title }}">
                                    </a>
                                    <div class="card-body">
                                        <h5      class="card-title mb-1">{{ $item->title }} {{ number_format($item->price) }} DH</h5>
                                        <p class="card-text mb-1">
                                            <a class="btn btn-sm btn-outline-primary"
                                                href="{{ route('show_purpose', $item->purpose) }}">
                                                {{ ucfirst($item->purpose) }}
                                            </a>
                                            <a class="btn btn-sm btn-outline-secondary"
                                                href="{{ route('show_category', $item->Cate->slug_name) }}">
                                                {{ $item->Cate->name }}
                                            </a>
                                            <a class="btn btn-sm btn-outline-dark"
                                                href="{{ route('show_city', $item->City->slug_city) }}">
                                                {{ $item->City->city }}
                                            </a>
                                        </p>
                                        <p class="card-text">
                                            <i class="fas fa-bed"></i> {{ $item->rooms }}
                                            <i class="fas fa-shower"></i> {{ $item->bathrooms }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @empty
            @endforelse





            <div class="row featurette mb-4">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">  <span class="text-muted">
                        Libérer le potentiel de votre propriété   </span></h2>
                    <p class="lead">Grâce à nos services de gestion complets, nous nous occupons de tous les aspects de votre propriété, de l’acquisition et du contrôle des locataires aux contrats de location et d’entretien. Notre objectif est de vous offrir la tranquillité d’esprit tout en optimisant la performance financière de votre portefeuille immobilier.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="images\1.jpg" style="width: 500px;height:500px ;border-radius:10px" alt="Image">



                </div>
            </div>





            <!-- /END THE FEATURETTES -->
        </div>
    </main>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const myCarousel = new Carousel(document.querySelector("#cat_cara"), {});
            // $(document).('.carousal__button').addClass(' text-white shadow-lg');
        });
    </script>
@endsection
