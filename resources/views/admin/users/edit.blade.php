@extends("layouts.admin.admin")

@section("section")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @include("layouts.admin.errors")

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit User</h3>
                            </div>
                        @include("layouts.admin.errors")
                        <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text" placeholder="Ad" name="name" value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Surname</label>
                                        <input class="form-control" id="surname" type="text" placeholder="Soyad" name="surname" value="{{ $user->surname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Number</label>
                                        <input class="form-control" type="phone" placeholder="GSM" name="number" id="number" value="{{ $user->number }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role" class="select2-container form-control" >
                                            <option {{ ($user->role == "user")?"selected":"" }} value="user">User</option>
                                            <option {{ ($user->role == "admin")?"selected":"" }} value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->





                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
