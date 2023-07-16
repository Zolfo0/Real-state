@push('title')
    Admin Login
@endpush
@include('AdminPanel.layouts.start')
{{-- @include('AdminPanel.layouts.navbar') --}}

<div class="container-fluid">
    <div class="row">

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-md-10 mx-auto col-lg-5">
                    <h1 class="display-5 lh-1 mb-4  text-center">Bienvenue <b class="fw-bold text-primary">Administrateur</b></h1>
                    <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST"
                        action="{{ route('AdminLogin') }}">

                        @csrf
                        <x-log-input type="email" name="email" label="adresse Email " placeholder="name@example.com" />
                        <x-log-input type="password" name="password" label="Mot de pass " placeholder="Password" />

                        {{-- <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div> --}}
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
                        <hr class="my-4">
                        <small class="text-muted">En cliquant sur S'inscrire, vous acceptez les conditions d'utilisation.</small>
                        <small class="text-muted"> Vous n'avez pas de compte ?<a href="{{ url('/signup') }}"  >S'inscrire </a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('AdminPanel.layouts.end')
