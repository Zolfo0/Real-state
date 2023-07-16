@extends('layouts.app')
@push('title')
    {{ $CMS['about_title'] }}
@endpush
@push('meta')
    {{ $CMS['about_meta'] }}
@endpush
@section('content_box')
    <div class="container">
        <div class="py-5">
            <div class="row m-2 p-4">
                <div class="row featurette mr-5">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">À propos de nous <span class="text-muted"> </span></h2>
                        <p class="lead">Pendant des années, des millions d'acheteurs de maisons se sont tournés vers la maison de leurs rêves,
                            offrant une liste complète de propriétés à vendre,
                             ainsi que des informations et des outils pour prendre des décisions immobilières éclairées. Aujourd'hui, plus que jamais,</p>
                    </div>
                    <div class="col-md-5">
                        <img class="img-responsive accordion w-100 h-50 mt-5" src=" images/Image1.png " alt=""    style=" border-radius:20px "  />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
