
@extends('layouts.app')
@section('content')
    <div class="container mt-5">
<div class="row mt-5">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                {{ __('language.MYAPPOINTMENTS') }}
            </div>
            <div class="card-body">
                <table class="table table-dark mt-3">
                    <thead>
                        <tr>
                            <td>{{ __('language.PATIENTNAME') }}</td>
                            <td>{{ __('language.PATIENTEMAIL') }}</td>
                            <td>{{ __('language.PATIENTPHONE') }}</td>
                            <td>{{ __('language.DAYS') }}</td>
                            <td>{{ __('language.TIME') }}</td>
                            <td>{{ __('language.CONSULTANCYFEES') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->patientname }}</td>
                                <td>{{ $item->patientemail }}</td>
                                <td>{{ $item->patientphone }}</td>
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