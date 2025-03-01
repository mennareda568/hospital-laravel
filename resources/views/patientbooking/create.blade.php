@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form enctype="multipart/form-data" method="post" action="{{ route('savebooking') }}">
                    @csrf
                    <input type="hidden" name="doctor" value={{ $result->name }}>
                    <input type="hidden" name="doctoremail" value={{ $result->email }}>
                    <input type="hidden" name="department" value={{ $result->department }}>
                    <input type="hidden" name="consultancyfees" value={{ $result->Consultancyfees }}>
                    <input type="hidden" name="days" value={{ $result->days }}>
                    <input type="hidden" name="time" value={{ $result->time }}>
                    <input type="hidden" name="patientemail" value="{{ Auth::user()->email }}">

                    <label>{{ __('language.NAME') }}</label>
                    <input type="text" name="patientname" class="form-control mb-4" value={{ $data->name }}>
                    @error('patientname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.AGE') }}</label>
                    <input type="text" name="patientage" class="form-control mb-4" value={{ $data->age }}>
                    @error('patientage')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.PHONE') }}</label>
                    <input type="text" name="patientphone" class="form-control mb-4" value={{ $data->phone }}>
                    @error('patientphone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="submit" value='{{ __('language.BOOKANAPPOINTMENT') }}'
                        class="form-control btn btn-success">

                </form>
            </div>
        </div>
    </div>
@endsection
