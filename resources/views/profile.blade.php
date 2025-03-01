@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            ( {{ __('language.MYPROFILE') }} )
                        </div>
                    </div>
                    <div class="card-body ">
                        @if (session('message'))
                            <h4 class="alert alert-success">{{ session('message') }}</h4>
                        @endif
    
                                <label>{{__('language.NAME')}}</label>
                                <label class="form-control mb-4">{{ Auth::user()->name }}</label>

                              
                                <label>{{__('language.EMAIL')}}</label>
                                <label class="form-control mb-4">{{ Auth::user()->email }}</label>
                              
                                <label>{{__('language.PHONE')}}</label>
                                <label class="form-control mb-4">{{ $result->phone }}</label>
                               
                                <label>{{__('language.AGE')}}</label>
                                <label class="form-control mb-4">{{ $result->age }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

