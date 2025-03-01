@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            {{ __('language.MYBOOKING') }}
                            <a href="{{route('doctorlist')}}">Show Doctor List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <h4 class="alert alert-success">{{ session('message') }}</h4>
                        @endif
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>{{ __('language.DOCTORNAME') }}</td>
                                    <td>{{ __('language.DEPARTMENT') }}</td>
                                    <td>{{ __('language.DAYS') }}</td>
                                    <td>{{ __('language.TIME') }}</td>
                                    <td>{{ __('language.CONSULTANCYFEES') }}</td>
                                    <td>{{ __('language.DELETE') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->doctor }}</td>
                                        <td>{{ $item->department }}</td>
                                        <td>{{ $item->days }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->consultancyfees }}</td>
                                        <td>
                                            <a href="{{ route('deletebook', $item->id) }}" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
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
