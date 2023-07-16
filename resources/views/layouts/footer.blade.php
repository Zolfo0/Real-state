<!-- Footer Bootstrap -->
<div class="  p-2 text-light m-auto" style="background-color: #344150 ">
    <footer class="footer mt-auto p-0 m-0">



        <div class="row m-5">
            <div class="col-4 offset-1">
                <div class="mb-3 row">
                    @if (!empty($logo_image->value))
                        <div class="col-2 me-3">
                            <a class="navbar-brand" href="{{ route('userHome') }}">
                                <img style="height: 80px" src="{{ asset('storage/siteSettings/' . $logo_image->value) }}"
                                    alt="{{ $brand_title->value ?? 'atmaz' }}">
                            </a>
                        </div>
                    @endif
                    <div class="col my-auto">
                        <a class="text-white btn p-0" href="{{ route('userHome') }}">
                            <h4>{{ $brand_title->value ?? '  ' }}</h4>
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-3"><i class="far fa-address-book"></i> Contactez-nous</p>
                    @if (!empty($contacts['phone']->value))
                        <h6 class="mb-2">
                            <a class="btn btn-outline-success btn-sm" href="tel:{{ $contacts['phone']->value }}">
                                <i class="fas fa-phone-alt"></i> {{ $contacts['phone']->value }}</a>
                        </h6>
                    @endif
                    @if (!empty($contacts['email']->value))
                        <h6 class="mb-2">
                            <a class="btn btn-outline-primary btn-sm mb-1 w-auto"
                                href="mailto:{{ $contacts['email']->value }}">
                                <i class="fas fa-envelope"></i> {{ $contacts['email']->value }}</a>
                        </h6>
                    @endif
                </div>


            </div>
            <div class="col-3">
                <h5><i class="fa fa-sitemap" aria-hidden="true"></i> Plan du site</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('userHome') }}"
                            class="nav-link p-0 text-white">Accueil</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show') }}" class="nav-link p-0 text-white">
                            propriétés</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show_about') }}" class="nav-link p-0 text-white">À
                            propos</a></li>

                    <li class="nav-item mb-2"><a href="{{ route('show_terms') }}"
                            class="nav-link p-0 text-white">Conditions</a></li>
                </ul>
            </div>

            <div class="col-3">
                <h5>Liens rapides</h5>
                <ul class="nav flex-column text-white">
                    <li class="nav-item mb-2 "><a href="{{ route('userHome') }}" class="nav-link p-0 text-white">
                            Accueil</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show') }}"
                            class="nav-link p-0 text-white">propriétés</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('UserProfile') }}"
                            class="nav-link p-0 text-white">Profil</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show_saved_pro') }}"
                            class="nav-link p-0 text-white">enregistré</a></li>
                </ul>
            </div>
        </div>
          {{--    <div class=" container p-4    ">
                <form >
                    <h5>Abonnez-vous à notre newsletter</h5>
                    <p>Résumé mensuel de ce qui est nouveau et excitant de notre part.</p>
                    <div class="d-flex w-50 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email adress</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary w-25" type="button">Abonnez-vous</button>
                    </div>
                </form>
            </div>--}}







        <div class="   container pt-2     border-top">
            <div class="row ">
                <div class="col-10">
                    <p class="    text-light  ">{{ $footer_content->value ?? '© 2023 ATAMZ.' }}</p>
                </div>
                <div class="col-2">
                    <ul class="list-unstyled d-flex">
                        @foreach ($social_links as $key => $value)
                            @if (!empty($value->value))
                                <li class="ms-3">
                                    <a class="link-light" href="{{ $value->value }}">
                                        <h4>
                                            <i class="fa {{ 'fa-' . $key }}" aria-hidden="true"></i>
                                        </h4>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class=" text-primary" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
