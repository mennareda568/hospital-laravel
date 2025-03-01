
@extends("layouts.app")
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
        <div class="card">
  <div class="card-header">
    {{__('language.DETAILSOFMESSAGES')}}
  </div>
  <div class="card-body">
    <table class="table table-dark">
        <thead>
            <tr>
                <td>{{__('language.ID')}}</td>
                <td>{{__('language.NAME')}}</td>
                <td>{{__('language.EMAIL')}}</td>
                <td>{{__('language.MESSAGE')}}</td>
                <td>{{__('language.OPERATION')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$msg->id}}</td>
            <td>{{$msg->name}}</td>
            <td>{{$msg->email}}</td>
            <td>{{$msg->message}}</td>
            <td>
            <a href="{{route('home')}}" class="btn btn-success"><i class="fa-solid fa-house"></i></a>
            </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
        </div>
    </div>
</div>

@endsection
