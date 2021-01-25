@extends('admin.partials.layout')

@section('content')

<div class="row">
    <!--------------------{Add Skills Form}------------------>
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
                Add Skills
            </div>
            <div class="card-body">
                <form method="post" action="{{route('add.skills')}}">
                    @csrf
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">start</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="skill" placeholder="Skill Name">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">createt</i>
                            </span>
                        </div>
                        <input type="number" class="form-control" name="pre_Level" placeholder="Percentage Level">
                    </div>

                    <input class="btn btn-primary rounded-pill mt-4" type="submit" value="Add">
                </form>
            </div>
        </div>
    </div>

    <!--------------------{Table Of Skills}------------------>
    <div class="col-md-12">
        <div class="card card-nav-tabs">
            <div class="card-header card-header-warning">
                All Skills
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Skill</th>
                            <th>Percentage-level (%)</th>
                            <th>operation</th>
                        </thead>
                        <tbody>

                            @foreach ($skills as $skill)
                                <tr>
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->skill_name}}</td>
                                    <td>{{$skill->pres_level}}</td>
                                    <td>
                                        <a href="{{'delete-skill/'.$skill->id}}" class="btn btn-danger btn-sm px-2">
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href="{{'edit-skill/'.$skill->id}}" class="btn btn-success btn-sm px-2">
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

