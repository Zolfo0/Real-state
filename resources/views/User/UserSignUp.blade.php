@push('title')
    Sign Up To Immobilier
@endpush
@include('layouts.header')


<div class="container col-xl-10 col-xxl-8 px-4 py-5">



        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('UserSignup') }}">
                <h2 class=" text-primary text-xl-center fw-  lh-1 mb-5"> Inscrivez-vous </h2>
                @csrf
                <x-log-input type="text" name="name" label="Nom d'utilisation" placeholder="name@example.com" />
                <x-log-input type="email" name="email" label="adresse Email " placeholder="name@example.com" />
                <x-log-input type="password" name="password" label=" mot de pass" placeholder="Password" />
                <x-log-input type="password" name="conf_password" label="Confirmer mot de pass  " placeholder="Password" />
                {{-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>
                <hr class="my-4">
                <small class="text-muted">En cliquant sur S'inscrire, vous acceptez les conditions d'utilisation.</small>
                <small class="text-muted"> Vous avez déjà un compte?  <a href="{{ route('UserLoginForm') }}">Connexion</a></small>
            </form>
        </div>
    </div>
</div>

@include('layouts.close')
