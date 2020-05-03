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

                            @if (count($errors)!=0)
                            <div class="alert alert-danger">
                                <ul>@foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="form-group">
                                <label>Reg. numeris</label>
                                <input type="text" class="form-control @if ($errors->has('reg_number')) border-danger @endif" name="reg_number" value="{{$car->reg_number}}">
                            </div>

                            <div class="form-group">
                                <label>Markė</label>
                                <input type="text" class="form-control @if($errors->has('brand'))  border-danger  @endif"  name="brand" value="{{$car->brand}}">
                            </div>

                            <div class="form-group">
                                <label>Modelis</label>
                                <input type="text" class="form-control @if($errors->has('model')) border-danger  @endif"  name="model" value="{{$car->model}}">
                            </div>

                            <div class="form-group">
                                <label>Savininkas</label>
                                <select class="form-control @if($errors->has('owner_id')) border-danger  @endif"  name="owner_id">
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vadybininkas</label>
                                <select class="form-control @if($errors->has('user_id'))  border-danger  @endif"  name="user_id">
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
