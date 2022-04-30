@extends('layouts.app')

@section('title')
    All Department
@endsection

@section('content')
    <section class="section">
        <x-bread-crumb title="Department">
            <div class="breadcrumb-item">Dep Lists</div>
        </x-bread-crumb>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Departments</h4>
                    <a href="{{ route('department.create') }}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Phone</th>
                                <th>Control</th>
                                <th>Updated_At</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
