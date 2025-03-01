@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            {{ __('language.ADMINS') }}
                        </div>
                    </div>
                    <div class="card-body ">
                        @if (session('message'))
                            <h4 class="alert alert-success">{{ session('message') }}</h4>
                        @endif
                        <table class="table table-dark ">
                            <thead>
                                <tr>
                                    <td>{{ __('language.ID') }}</td>
                                    <td>{{ __('language.NAME') }}</td>
                                    <td>{{ __('language.EMAIL') }}</td>
                                    <td>{{ __('language.PHONE') }}</td>
                                    <td>{{ __('language.ACTION') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>

                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            <a href="{{ route('showadmin', $item->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('editadmin', $item->id) }}" class="btn btn-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('deleteadmin', $item->id) }}" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }} <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    @endsection
