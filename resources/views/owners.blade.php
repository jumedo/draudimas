@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Vardas Pavardė</th>
                            <th scope="col">nuo</th>
                            <th scope="col">iki</th>
                            <th scope="col">Pasirinkimai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($owners as $owner)

                            <tr>
                                <td>{{$owner->name}} {{$owner->surname}}</td>
                                <td> {{$owner->from_date}}</td>
                                <td> {{$owner->to_date}}</td>
                                <td>
                                    @if (Auth::user()->type==1)
                                        <a class="btn badge-info"
                                           href="{{route('editOwner', $owner->id )}}">Redaguoti</a>
                                        <a class="btn badge-danger"
                                           href="{{route('deleteOwner', $owner->id )}}">Trinti</a></td>
                                @endif
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    @if (Auth::user()->type==1)
                        <a href="{{route('addOwner')}}" class="btn btn-success">Pridėti automobilio savininką </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
