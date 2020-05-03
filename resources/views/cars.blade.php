@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Reg. nr</th>
                            <th scope="col">Markė</th>
                            <th scope="col">Modelis</th>
                            <th scope="col">Vardas Pavardė</th>
                            <th scope="col">Pasirinkimai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cars as $car)

                            <tr>
                                <td>{{$car->reg_number}}</td>
                                <td> {{$car->brand}}</td>
                                <td> {{$car->model}}</td>
                                <td> {{$car->owner->name}} {{$car->owner->surname}}</td>
                                <td>
                                    @if (Auth::user()->type==1)
                                        <a class="btn badge-info" href="{{route('editCar', $car->id)}}">Redaguoti</a>
                                        <a class="btn badge-danger" href="{{route('deleteCar', $car->id)}}">Trinti</a>
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                        </tbody>

                    </table>
                    @if (Auth::user()->type==1)
                        <a href="{{route('addCar')}}" class="btn btn-success">Pridėti naują automobilį</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection








