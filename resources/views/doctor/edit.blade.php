@extends("layouts.app")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
         <form enctype="multipart/form-data" action="{{route('updatedoctor')}}" method="post" >
            @csrf
                <input type="hidden" name="old_id" class="form-control mb-4" value="{{ Auth::user()->id }}">
                
                <label>{{__('language.DOCTORNAME')}}</label>
                <input type="text" name="name" class="form-control mb-4" value="{{ Auth::user()->name }}">
                @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.EMAIL')}}</label>
                <input type="email" name="email" class="form-control mb-4" value="{{ Auth::user()->email }}">
                @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.IMAGE')}}</label>
                <input type="file" name="doc_image" class="form-control mb-4">
                @error('image')
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

                
                <label>{{__('language.DEPARTMENT')}}</label>
                <input type="text" name="department" class="form-control mb-4" value="{{$result->department}}">
                @error('department')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.AGE')}}</label>
                <input type="text" name="age" class="form-control mb-4" value="{{$result->age}}">
                @error('age')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value='{{__('language.UPDATEMYPROFILE')}}' class="form-control btn btn-success">

            </form>
        </div>
    </div>
</div>

@endsection
