@extends("layouts.app")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form enctype="multipart/form-data" method="post" action="{{route('saveuser')}}">
                @csrf
                <label>{{__('language.USERNAME')}}</label>
                <input type="text" name="name" class="form-control mb-4">
                @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.EMAIL')}}</label>
                <input type="text" name="email" class="form-control mb-4">
                @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{__('language.PASSWORD')}}</label>
                <input type="password" name="password" class="form-control mb-4">
                @error('password')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label class="block">
                        {{__('language.ROLE')}}
                    </label>
                    <div class="clip-radio radio-primary">
                    <input type="radio" id="rg-female" name="role" value="doctor" >
                    <label for="rg-female">
                        {{__('language.DOCTOR')}}
                    </label>
                    <input type="radio" id="rg-male" name="role" value="admin">
                    <label for="rg-male">
                        {{__('language.ADMIN')}}
                    </label>
                    </div>
                    </div>
                @error('role')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value='{{__('language.CREATEUSERACCOUNT')}}' class="form-control btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection
