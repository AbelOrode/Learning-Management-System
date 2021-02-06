@extends('admin.admin_master')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update User</h4>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('users.update', $editData->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Role <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="userType" id="usertype" required="" class="form-control">
                                                                <option value="" selected="" disabled="">Select Role</option>
                                                                <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected": "") }}>Admin</option>
                                                                <option value="Student" {{ ($editData->usertype == "Student" ? "selected": "") }}>Student</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <h5>Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" value="{{ $editData->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" value="{{ $editData->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
