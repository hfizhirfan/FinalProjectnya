@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="card shadow mb-4 ">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-9 col-xl-6">
                    <h4 class="m-0 font-weight-bold">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-6">
                    <ul class="list-inline  float-end">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Data
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                <div class="table-responsive border p-3 rounded-">
                    <table class="table table-bordered table-striped table-hover mb-0 bg-white datatable" id="employeeTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr>
                                    <td>{{ $type->id }}</td>
                                    <td>{{ $type->name_type }}</td>
                                    <td>@include('admin.type.actions')</td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->firstname }}</td>
                                    <td>{{ $employee->lastname }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->position->name }}</td>
                                    <td>@include('employee.actions')</td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection