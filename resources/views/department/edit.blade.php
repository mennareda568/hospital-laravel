@extends("layouts.app")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
         <form enctype="multipart/form-data" action="{{route('updatedepart')}}" method="post" >
            @csrf
                <input type="hidden" name="old_id" class="form-control mb-4" value="{{$result->id}}">

                <label>{{__('language.DEPARTMENTNAME')}}</label>
                <input type="text" name="name" class="form-control mb-4" value="{{$result->name}}">
                @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <input type="submit" value='{{__('language.EDITDEPARTMENT')}}' class="form-control btn btn-success">

            </form>
        </div>
    </div>
</div>

@endsection
