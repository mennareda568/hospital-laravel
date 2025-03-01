@extends("layouts.app")
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 m-auto">
        <div class="card">
  <div class="card-header">
    {{__('language.DETAILSOFDOCTOR')}}
  </div>
  <div class="card-body">
    <table class="table table-dark">
        <thead>
            <tr>
                <td>{{__('language.ID')}}</td>
                <td>{{__('language.DOCTORNAME')}}</td>
                <td>{{__('language.IMAGE')}}</td>
                <td>{{__('language.EMAIL')}}</td>
                <td>{{__('language.GENDER')}}</td>
                <td>{{__('language.ADDRESS')}}</td>
                <td>{{__('language.PHONE')}}</td>
                <td>{{__('language.DEPARTMENT')}}</td>
                <td>{{__('language.AGE')}}</td>
                <td>{{__('language.DAYS')}}</td>
                <td>{{__('language.TIME')}}</td>
                <td>{{__('language.CONSULTANCYFEES')}}</td>
                <td>{{__('language.OPERATION')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$result->id}}</td>
            <td>{{$result->name}}</td>
            <td><img style="width:100px" src={{asset("img/doctors/".$result->doc_image)}} ></td>
            <td>{{$result->email}}</td>
            <td>{{$result->gender}}</td>
            <td>{{$result->address}}</td>
            <td>{{$result->phone}}</td>
            <td>{{$result->department}}</td>
            <td>{{$result->age}}</td>
            <td>{{$result->days}}</td>
            <td>{{$result->time}}</td>
            <td>{{$result->Consultancyfees}}</td>
            <td>
            <a href="{{route('doctor')}}" class="btn btn-success"><i class="fa-solid fa-house"></i></a>
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
