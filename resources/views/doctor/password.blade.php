@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form class="mt-5" enctype="multipart/form-data" action="{{ route('changepass') }}" method="post">
                    @csrf
                    <input type="hidden" name="old_id" value="{{ Auth::user()->id }}">

                    <label>{{ __('language.PASSWORD') }}</label>
                    <br>
                    <input type="password" name="password" class="form-control mb-4">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" value='{{__('language.UPDATE')}}' class="btn btn-primary">

                </form>
            </div>
        </div>
    </div>
@endsection
