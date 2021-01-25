@extends('admin.partials.layout')

@section('content')

<div class="row">
    <!--------------------{Add Experiance Form}------------------>
    <div class="col-12">
        @if (session()->has('successMasege'))
            <div class="alert alert-success" role="alert">
                {{session()->get('successMasege')}}
            </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="card card-nav-tabs text-center">
            <div class="card-header card-header-primary">
                Add Experience
            </div>
            <div class="card-body">
                <form method="post" action="{{route('add.experience')}}">
                    @csrf
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">work</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="company" placeholder="Company Name">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">how_to_reg</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="position" placeholder="Position">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">create</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="description" placeholder="Write description">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">calendar_today</i>
                            </span>
                        </div>
                        <input type="date" class="form-control" name="date" placeholder="Date">
                    </div>
                    <input class="btn btn-primary rounded-pill mt-4" type="submit" value="Add">
                </form>
            </div>
        </div>
    </div>

    <!--------------------{Table Of Experiance}------------------>
    <div class="col-md-12">
        <div class="card card-nav-tabs">
            <div class="card-header card-header-warning">
                All Experiances
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Campany</th>
                            <th>position</th>
                            <th>Description</th>
                            <th>Year</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                            @foreach ($experiances as $experiance)
                                <tr>
                                    <td>{{$experiance->id}}</td>
                                    <td>{{$experiance->company_name}}</td>
                                    <td>{{$experiance->position}}</td>
                                    <td>{{$experiance->description}}</td>
                                    <td>{{$experiance->year}}</td>
                                    <td>
                                        <a href="{{'delete-experiance/'.$experiance->id}}" class="btn btn-danger btn-sm px-2">
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href="{{'edit-experiance/'.$experiance->id}}" class="btn btn-success btn-sm px-2">
                                            <i class="material-icons">create</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

