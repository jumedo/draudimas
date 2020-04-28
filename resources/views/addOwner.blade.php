@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pridėti naują automobilio savininką</div>
                    <form action="{{route('insertOwner')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Vardas</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Pavardė</label>
                                <input type="text" class="form-control" name="surname">
                            </div>

                            <div class="form-group">
                                <label>Nuo</label>
                                <input type="date" class="form-control" name="from_date">
                            </div>

                            <div class="form-group">
                                <label>Iki</label>
                                <input type="date" class="form-control" name="to_date">
                            </div>
                            <button type="submit" class="btn btn-success">PATEIKTI</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
