@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form enctype="multipart/form-data" action="{{ route('updatedays') }}" method="post">
                    @csrf
                    <input type="hidden" name="old_id" class="form-control mb-4" value="{{ Auth::user()->id }}">

                    <label>{{ __('language.DAYS') }}</label>
                    <input type="text" name="days" class="form-control mb-4" value="{{ $result->days }}">
                    @error('days')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.TIME') }}</label>
                    <input type="text" name="time" class="form-control mb-4" value="{{ $result->time }}">
                    @error('time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label>{{ __('language.CONSULTANCYFEES') }}</label>
                    <input type="text" name="Consultancyfees" class="form-control mb-4"
                        value="{{ $result->Consultancyfees }}">
                    @error('Consultancyfees')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="submit" value='{{ __('language.UPDATEMYPROFILE') }}'
                        class="form-control btn btn-success">

                </form>
            </div>
        </div>
    </div>
@endsection
