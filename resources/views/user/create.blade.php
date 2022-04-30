@extends('layouts.app')

@section('title')
    Create User
@endsection

@section('content')
    <section class="section">
        <x-bread-crumb title="Users">
            <div class="breadcrumb-item"><a href="{{ route('user-manage.index') }}">User Lists</a></div>
            <div class="breadcrumb-item">Add User</div>
        </x-bread-crumb>

        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user-manage.store') }}" id="createForm" method="POST">
                            @csrf

                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                    <label>User ID</label>
                                    <input type="text" class="form-control" name="id_no" placeholder="ID Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="name" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="user@gmail.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="09421722078">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>NRC</label>
                                    <input type="text" class="form-control" name="nrc" placeholder="NRC Number">
                                </div>
                            </div>

                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                    <label>Mother</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Daw Hla">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Father</label>
                                    <input type="text" class="form-control" name="nrc" placeholder="U Ba">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
