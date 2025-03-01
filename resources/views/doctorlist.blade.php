@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            {{ __('language.DOCTORS') }}
                            <form action={{ route('searchlist') }} method="get">
                                <div class="input-group">
                                    <input type="search" name="search" class="form-control">
                                    <span class="input-group-prepend">
                                        <button type="submit" class="btn btn-primary">{{ __('language.SEARCH') }}</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body ">
                        @if (session('message'))
                        <h4 class="alert alert-success mt-2">{{ session('message') }}</h4>
                        @endif
                        <table class="table table-dark ">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>{{ __('language.DOCTORNAME') }}</td>
                                    <td>{{ __('language.DEPARTMENT') }}</td>
                                    <td>{{ __('language.DAYS') }}</td>
                                    <td>{{ __('language.TIME') }}</td>
                                    <td>{{ __('language.PHONE') }}</td>
                                    <td>{{ __('language.CONSULTANCYFEES') }}</td>
                                    <td>{{ __('language.BOOKANAPPOINTMENT') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($element as $item)
                                    <tr>
                                        <td><img style="width:100px" src={{ asset('img/doctors/' . $item->doc_image) }}>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->department }}</td>
                                        <td>{{ $item->days }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->Consultancyfees }}</td>
                                        <td>
                                            <a href="{{ route('bookappoint', $item->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-book"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $element->links() }} <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
