@extends('layouts.app')

@section('title')
    {{ $student->name }}
@endsection

@section('content')
    <section class="section">
        <x-bread-crumb title="User">
            <div class="breadcrumb-item"><a href="{{ route('user.index') }}">User Lists</a></div>
            <div class="breadcrumb-item">Detail</div>
        </x-bread-crumb>
    </section>

    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="{{ $student->profile_img_path() }}" class="rounded-circle profile-image">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">ID</div>
                            <div class="profile-widget-item-value">
                                {{ $student->id_no }}
                            </div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Dept</div>
                            <div class="profile-widget-item-value">
                                {{ $student->department ? $student->department->name : '-' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-widget-description">
                    <div class="profile-widget-name mb-2">{{ $student->name }}<div
                            class="text-muted d-inline font-weight-normal">
                            <div class="slash"></div> {{ $student->usertype }}
                        </div>
                    </div>
                    <div>
                        <span>{{ $student->email }}</span>
                        <div class="slash"></div>
                        <span>{{ $student->phone }}</span>
                    </div>
                    <p class="mb-4">
                        Date of join :
                        <span
                            class="ml-2">{{ Carbon\Carbon::parse($student->date_of_join)->format('d M Y') }}</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-map-location-dot mr-1"></i>
                        {{ $student->address }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Courses</h4>
                </div>
                <div class="card-body">



                </div>
            </div>
        </div>
    </div>
@endsection
