@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            {{ __('language.MESSAGES') }}
                        </div>
                    </div>
                    <div class="card-body ">
                        @if (session('message'))
                            <h4 class="alert alert-success">{{ session('message') }}</h4>
                        @endif
                        <table class="table table-dark ">
                            <thead>
                                <tr>
                                    <td>{{ __('language.MESSAGE') }}</td>
                                    <td>{{ __('language.NAME') }}</td>
                                    <td>{{ __('language.EMAIL') }}</td>
                                    <td>{{ __('language.PHONE') }}</td>
                                    <td>{{ __('language.DELETE') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $item)
                                    <tr>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobil }}</td>
                                        <td>
                                            <a href="{{ route('deletemsg', $item->id) }}" class="btn btn-danger"><i
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
