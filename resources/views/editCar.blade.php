@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti automobilį</div>
                    <form action="{{route('updateCar', $car->id)}}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Reg. numerisr</label>
                                <input type="text" class="form-control" name="reg_number" value="{{$car->reg_number}}">
                            </div>

                            <div class="form-group">
                                <label>Markė</label>
                                <input type="text" class="form-control" name="brand" value="{{$car->brand}}">
                            </div>

                            <div class="form-group">
                                <label>Modelis</label>
                                <input type="text" class="form-control" name="model" value="{{$car->model}}">
                            </div>

                            <div class="form-group">
                                <label>Savininkas</label>
                                <select class="form-control" name="owner_id">
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vadybininkas</label>
                                <select class="form-control" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">IŠSAUGOTI</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
