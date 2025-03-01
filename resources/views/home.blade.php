@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        @if (Auth::user() && Auth::user()->role == 'patient')
            @if (session('message'))
                <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('myprofile', Auth::user()->id) }}">
                                    {{ __('language.MYPROFILE') }}
                                </a>
                                <i class="fa-solid fa-user fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('relation') }}">
                                    {{ __('language.MYBOOKINGS') }}
                                </a>
                                <i class="fa-solid fa-book-medical fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('doctorlist') }}">
                                    {{ __('language.DOCTORS') }}
                                </a>
                                <i class="fa-solid fa-user-doctor fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif
        @if (Auth::user() && Auth::user()->role == 'admin')
            @if (session('messageadmin'))
                <h4 class="alert alert-success">{{ session('messageadmin') }}</h4>
            @endif

            <div class="row mt-5">
                <div class="col-md-4 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('doctor') }}">
                                    {{ __('language.DOCTORS') }}
                                </a>
                                <i class="fa-solid fa-user-doctor fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            {{ $countdoctors }}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('department') }}">
                                    {{ __('language.DEPARTMENT') }}
                                </a>
                                <i class="fa-solid fa-list fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            {{ $countdepart }}

                        </div>
                    </div>
                </div>

                <div class="col-md-4 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('allbooking') }}">
                                    {{ __('language.ALLBOOKING') }}
                                </a>
                                <i class="fa-solid fa-book-medical fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            {{ $countpatibook }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (Auth::user() && Auth::user()->role == 'doctor')
            @if (session('messagedoc'))
                <h4 class="alert alert-success">{{ session('messagedoc') }}</h4>
            @endif
            <div class="row mt-5">
                <div class="col-md-5 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <a href="{{ route('myapp') }}">
                                {{ __('language.MYAPPOINTMENTS') }}
                            </a>
                            <i class="fa-regular fa-calendar-check fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ route('patient') }}">
                                    {{ __('language.MYPATIENTS') }}
                                </a>
                                <i class="fa-solid fa-hospital-user fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    @endif
    </div>
@endsection
