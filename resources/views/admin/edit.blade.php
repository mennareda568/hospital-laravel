@extends("layouts.app")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
         <form enctype="multipart/form-data" action="{{route('updateadmin')}}" method="post" >
            @csrf
                <input type="hidden" name="old_id" value="{{$result->id}}">
            
                <label>{{__('language.ADMINNAME')}}</label>
                <input type="text" name="name" class="form-control mb-4" value="{{$result->name}}">
                @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.EMAIL')}}</label>
                <input type="email" name="email" class="form-control mb-4" value="{{$result->email}}">
                @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label>{{__('language.ADDRESS')}}</label>
                <input type="text" name="address" class="form-control mb-4" value="{{$result->address}}">
                @error('address')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label class="block">
                        {{__('language.GENDER')}}
                    </label>
                    <div class="clip-radio radio-primary">
                    <input type="radio" id="rg-female" name="gender" value="female" >
                    <label for="rg-female">
                        {{__('language.FEMALE')}}
                    </label>
                    <input type="radio" id="rg-male" name="gender" value="male">
                    <label for="rg-male">
                        {{__('language.MALE')}}
                    </label>
                    </div>
                    </div>
                @error('gender')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label>{{__('language.PHONE')}}</label>
                <input type="text" name="phone" class="form-control mb-4" value="{{$result->phone}}">
                @error('phone')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value='{{__('language.EDITADMINACCOUNT')}}' class="form-control btn btn-success">

            </form>
        </div>
    </div>
</div>

@endsection
