@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pridėti naują automobilio savininką</div>
                    <form action="{{route('insertCar')}}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Reg. numerisr</label>
                                <input type="text" class="form-control" name="reg_number">
                            </div>

                            <div class="form-group">
                                <label>Markė</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Modelis</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Savininko ID</label>
                                <input type="number" class="form-control" name="owner_id">
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label>Vartotojo ID</label>--}}
{{--                                <input type="text" class="form-control" name="user_id">--}}
{{--                            </div>--}}

                            <button type="submit" class="btn btn-success">PATEIKTI</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
