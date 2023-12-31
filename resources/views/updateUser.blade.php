@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('update',$post->id)}}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <label for="Username">名前</label><br>
                <input type="text" class="form-control" name="username" placeholder="Enter Username" value="{{$post->username}}"><br>
                <label for="Address">住所</label><br>
                <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{$post->address}}"><br>
                <label for="Gender">Gender</label><br>
                <select class="form-select" name="gender" aria-label="Default select example"><br>
                    <option selected>Male</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <label for="Nationality">メッセージ</label><br>
                <textarea type="text" class="form-control" name="nationality" placeholder="" value="">{{$post->nationality}}</textarea><br>
                <label for="DOB">誕生日</label><br>
                <input type="date" class="form-control" name="DOB" value="{{$post->dateOfBirth}}">
                <button type="submit" class="btn btn-primary mt-3">更新</button>
            </form>
        </div>
    </div>
</div>

@endsection
