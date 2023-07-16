@push('title')
    Log In To Immobilier
@endpush
@include('layouts.header')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('UserLogin') }}">
                <h2 class="  fw-  lh-1 mb-5 text-center text-primary ">S'inscrire</h2>
                <p class="col-lg-10 fs-4">

                </p>
                @csrf
                <x-log-input type="email" name="email" label="adresse Email " placeholder="name@example.com" />
                <x-log-input type="password" name="password" label="Mot de pass" placeholder="Password" />


                <button class="w-100 btn btn-lg btn-primary" type="submit">Connecxion</button>
                <hr class="my-4">
                <small class="text-muted">En cliquant sur S'inscrire, vous acceptez les conditions d'utilisation. </small>
                <small class="text-muted">  Vous n'avez pas de compte ?<a href="{{ route('UserSignupForm') }}"> S'inscrire
                        </a></small>
            </form>
        </div>
    </div>
</div>

@include('layouts.close')
