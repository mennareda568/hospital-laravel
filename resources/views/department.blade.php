@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            {{ __('language.DEPARTMENTS') }}
                            <a href="{{ route('createdepart') }}"
                                class="btn btn-success">{{ __('language.CREATEDEPARTMENT') }}</a>
                        </div>
                    </div>
                    <div class="card-body ">
                        @if (session('message'))
                            <h4 class="alert alert-success mt-2">{{ session('message') }}</h4>
                        @endif
                        <table class="table table-dark ">
                            <thead>
                                <tr>
                                    <td>{{ __('language.ID') }}</td>
                                    <td>{{ __('language.NAME') }}</td>
                                    <td>{{ __('language.ACTION') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
            
                                            <a href="{{ route('editdepart', $item->id) }}" class="btn btn-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('deletedepart', $item->id) }}" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $result->links() }} <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    @endsection
