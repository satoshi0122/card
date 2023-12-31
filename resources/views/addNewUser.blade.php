@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('saveUser')}}" method="POST">
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
                <input type="text" class="form-control" name="username" placeholder=""><br>
                <label for="Address">住所</label><br>
                <input type="text" class="form-control" name="address" placeholder=""><br>
                <label for="Gender">性別</label><br>
                <select class="form-select" name="gender" aria-label="Default select example"><br>
                    <option selected>Male</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <label for="Nationality">メッセージ</label><br>
                <textarea type="text" class="form-control" name="nationality" placeholder="明けましておめでとうございます！"></textarea><br>
                <label for="DOB">誕生日</label><br>
                <input type="date" class="form-control" name="DOB">
                <button type="submit" class="btn btn-primary mt-3">新規作成<button>
            </form>
        </div>
    </div>
</div>

@endsection
