@extends("layouts.app")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
         <form enctype="multipart/form-data" action="{{route('updatepatients')}}" method="post" >
            @csrf
                <input type="hidden" name="old_id" value="{{$result->id}}">
                <input type="hidden" name="doctoremail" value="{{$result->doctoremail}}">

                <label>{{__('language.PATIENTNAME')}}</label>
                <input type="text" name="name" class="form-control mb-4" value="{{$result->name}}">
                @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.EMAIL')}}</label>
                <input type="text" name="email" class="form-control mb-4" value="{{$result->email}}">
                @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="hidden" name="gender" class="form-control mb-4" value="{{$result->gender}}">


                <label>{{__('language.ADDRESS')}}</label>
                <input type="text" name="address" class="form-control mb-4" value="{{$result->address}}">
                @error('address')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.PHONE')}}</label>
                <input type="text" name="phone" class="form-control mb-4" value="{{$result->phone}}">
                @error('phone')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.AGE')}}</label>
                <input type="text" name="age" class="form-control mb-4" value="{{$result->age}}">
                @error('age')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.MEDICALHISTORY')}}</label>
                <input type="text" name="medicalhistory" class="form-control mb-4" value="{{$result->medicalhistory}}">
                @error('medicalhistory')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.MEDICINE')}}</label>
                <input type="text" name="medicine" class="form-control mb-4" value="{{$result->medicine}}">
                @error('medicine')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value='{{__('language.EDIT')}}' class="form-control btn btn-success">

            </form>
        </div>
    </div>
</div>

@endsection
