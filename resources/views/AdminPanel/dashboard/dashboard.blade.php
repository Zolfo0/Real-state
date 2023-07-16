@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container ">
        <div class="container-fluid">
            <div class="mt-4">
                <h2 class=" text-primary">Dashboard</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-success" aria-current="page">Admin</li>
                        <li class="breadcrumb-item active text-primary">Dashboard</li>
                        {{-- <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_properties') }}">Add</a>
                        </div> --}}
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg' ) ?? null }}</div>
            <div class="mt-4 ">
                <div class="row mb-3 ">
                    <div class="col-4 ">
                        <div class="card ">
                            <div class="card-header bg-success ">
                                <h4 class="text-light  ">Users +{{ $newUsers->count() }}</h4>
                            </div>
                            <div class="card-body bg-white     text-dark">
                                <p class="m-0">New users this month
                                    <a class="stretched-link link-gradient" href="{{ route('list_users') }}">
                                        more info
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rounded  ">
                            <div class="card-header bg-primary text-white">
                                <h4 class=" ">Reviews +{{ $newReviews->count() }}</h4>
                            </div>
                            <div class="card-body bg-light bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">New reviews this month
                                    <a class="stretched-link link-gradient" href="{{ route('list_reviews') }}">
                                        more info
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h4>Properties +{{ $newProperty->count() }}</h4>
                            </div>
                            <div class="card-body bg-light bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">New properties this month
                                    <a class="stretched-link link-gradient" href="{{ route('list_properties') }}">
                                        more info
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <h4>More Info</h4>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <div class="d-flex ">
                                    <h5>Users</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-primary" href="{{ route('list_users') }}">
                                        more</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($newUsers as $User)
                                        @if ($loop->index < 6)
                                            <div class="col-3 mb-2">
                                                <img class="rounded-circle"
                                                    src="{{ !empty($User->Data->image) ? asset('/storage/userdata/' . $User->Data->image) : asset('stockUser.png') }}"
                                                    width="60px" alt="No Img">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="w-100">
                                                        <div class="fs-6">{{ $User->name }}</div>
                                                        <a class="text-muted"
                                                            href="mailto:{{ $User->email }}">{{ $User->email }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                        <div class="col-12">
                                            <h6>No new Users This month.</h6>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-danger text-white">
                                <div class="d-flex">
                                    <h5>Reviews</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-success" href="{{ route('list_reviews') }}">
                                        more</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($newReviews as $review)
                                        @if ($loop->index < 6)
                                            <div class="col-3 text-center mb-2">
                                                <img class="rounded-circle"
                                                    src="{{ !empty($review->Users[0]->Data->image)? asset('/storage/userdata/' . $review->Users[0]->Data->image): asset('stockUser.png') }}"
                                                    width="60px" alt="No Img">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="fs-6">{{ $review->Users[0]->name }}</div>
                                                {{ $review->review }}
                                            </div>
                                        @endif
                                    @empty
                                        <div class="col-12">
                                            <h6>No new reviews this month.</h6>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-warning text-white ">
                                <div class="d-flex">
                                    <h5>Properties</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-success "
                                        href="{{ route('list_properties') }}">
                                        more</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($newProperty as $property)
                                        @if ($loop->index < 3)
                                            <div class="col-3 mb-2">
                                                <img width="60px" class="rounded-circle"
                                                    src="{{ asset('/storage/property/' . $property->image) }}"
                                                    alt="Error">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="fs-6">{{ $property->title }}</div>
                                                <a class="text-muted"
                                                    href="{{ route('edit_properties', $property->id) }}">See more</a>
                                            </div>
                                        @endif
                                    @empty
                                        <div class="col-12">
                                            <h6>No new properties this month.</h6>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
