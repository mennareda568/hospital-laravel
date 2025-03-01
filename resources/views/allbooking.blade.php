@extends('layouts.app')
@section('content')
    <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                            {{ __('language.ALLBOOKING') }}
                            ({{$countpatibook}})
                        </div>
                        <div class="card-body">
                            @if (session('message'))
                            <h4 class="alert alert-success mt-2">{{ session('message') }}</h4>
                            @endif
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <td>{{ __('language.DOCTORNAME') }}</td>
                                        <td>{{ __('language.DEPARTMENT') }}</td>
                                        <td>{{ __('language.DAYS') }}</td>
                                        <td>{{ __('language.TIME') }}</td>
                                        <td>{{ __('language.CONSULTANCYFEES') }}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patientbook as $item)
                                        <tr>
                                            <td>{{ $item->doctor }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td>{{ $item->days }}</td>
                                            <td>{{ $item->time }}</td>
                                            <td>{{ $item->consultancyfees }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
