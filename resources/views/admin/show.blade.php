@extends("layouts.app")
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
        <div class="card">
  <div class="card-header">
    {{__('language.DETAILSOFADMIN')}}
  </div>
  <div class="card-body">
    <table class="table table-dark">
        <thead>
            <tr>
                <td>{{__('language.ID')}}</td>
                <td>{{__('language.ADMINNAME')}}</td>
                <td>{{__('language.EMAIL')}}</td>
                <td>{{__('language.GENDER')}}</td>
                <td>{{__('language.ADDRESS')}}</td>
                <td>{{__('language.PHONE')}}</td>
                <td>{{__('language.OPERATION')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$result->id}}</td>
            <td>{{$result->name}}</td>
            <td>{{$result->email}}</td>
            <td>{{$result->gender}}</td>
            <td>{{$result->address}}</td>
            <td>{{$result->phone}}</td>
            <td>
            <a href="{{route('admin')}}" class="btn btn-success"><i class="fa-solid fa-house"></i></a>
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
