<!-- Header Bootstrap -->
<header class="py-1 bg-white sticky-top W-100 shadow-lg text-dark">
    <div class=" pl-3 ">
        <nav class="navbar navbar-expand-lg     bg-white   ">
            <div class="container  ">

                @if (!empty($logo_image->value))
                    <a class="navbar-brand  " href="{{ route('userHome') }}">
                        <img style="height: 50px" src="{{ asset('storage/siteSettings/' . $logo_image->value) }}"
                            alt="{{ $brand_title->value ?? ' ATMAZ' }}">
                    </a>
                @endif
                <a class="navbar-brand " href="{{ route('userHome') }}">{{ $brand_title->value ?? ' ' }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                        <li class="nav-item">
                            <a class="nav-link text-dark @if ($menu == 'home') active @endif" aria-current="page"
                                href="{{ route('userHome') }}">Accueil</a>
                        </li>

                        <style>
                            .dropdown:hover .dropdown-menu {
                            display: block;
                            }
                        </style>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark  @if ($menu == 'category') active @endif dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catégories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($cate as $item)
                                    <li><a class="dropdown-item"
                                            href="{{ route('show_category', $item->slug_name) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark  @if ($menu == 'city') active @endif dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ville
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($city as $item)
                                    <li><a class="dropdown-item"
                                            href="{{ route('show_city', $item->slug_city) }}">{{ $item->city }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark @if ($menu == 'home') active @endif" aria-current="page"
                                href="{{ route('show_about') }}">  Á propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark @if ($menu == 'home') active @endif" aria-current="page"
                                href="{{ route('show_about') }}">  Contact</a>
                        </li>

                    </ul>
                    <div class="d-flex  ">
                        <form id="searchFrm" action="{{ route('propSearch') }}" method="POST" class="me-2">
                            @csrf
                            <div class="input-group">
                                   <select class="form-select w-25" name="purpose" id="" >

                                    <option
                                        @if (!empty($purpose)) {{ $purpose == 'rent' ? 'selected' : '' }} @endif
                                        value="rent">louer</option>
                                    <option
                                            @if (!empty($purpose)) {{ $purpose == 'sale' ? 'selected' : '' }} @endif
                                            value="sale">vendre </option>
                                    <option
                                        @if (!empty($purpose)) {{ $purpose == '*' ? 'selected' : '' }} @endif
                                        value="*">Tout</option>
                                </select>
                                <input class="form-control w-50" name="search" type="search"
                                    placeholder="rechercher par nom" value="{{ $SecStr ?? '' }}" aria-label="Search">
                                <button class="btn btn-outline-success " type="submit">
                                    <i class="fas fa-search "></i>
                                     </button>
                            </div>
                        </form>

                        @if ($status)
                            {{-- Logged-In Icon --}}
                            <div class="dropdown ms-1 text-end mr-4">
                                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ !empty($user['data']['image'])? asset('/storage/userdata/' . $user['data']['image']): asset('stockUser.png') }}"
                                        alt="{{ $user['name'] }}" width="38" height="38" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li>
                                        <div class="dropdown-item text-dark text-bold">{{ $user['name'] }}</div>
                                    </li>
                                    @if ($user['type'] == 'A' || $user['type'] == 'R')
                                        <li><a class="dropdown-item" target="_blank"
                                                href="{{ route('AdminHome') }}">Admin</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('UserProfile') }}">Profil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('show_saved_pro') }}">enregistré</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('UserLogout') }}"> se déconnecter</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="ml-5">
                                <a class="btn btn-outline-primary me-1" href="{{ route('UserLoginForm') }}">connectez vous  </a>
                               {{--   <a class="btn btn-outline-warning" href="{{ route('UserSignupForm') }}">s'inscrire</a>--}}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

