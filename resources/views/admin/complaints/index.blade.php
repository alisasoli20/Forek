@extends("layouts.admin.admin")

@section("section")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Complaints</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Complaints</li>
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
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title">Users</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ route("admin.complaint.add") }}" class="btn btn-primary mx-auto"><i class="fa fa-plus-circle mr-2"></i>Add User</a>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company Name</th>
                                        <th>Title</th>
                                        <th>Rating</th>
                                        <th>Complaint By</th>
                                        <th>Changes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($complaints as $complaint)
                                    <tr>
                                        <td>{!! $complaint->id !!}</td>
                                        <td>{!! $complaint->company_name !!}</td>
                                        <td>{!! $complaint->title !!}</td>
                                        <td>{!! $complaint->rating !!}</td>
                                        <td>{!! $complaint->user->name !!}</td>
                                        <td><form class="form-inline" method="POST" action="{{ route("admin.complaint.delete",$complaint->id) }}">@csrf<a href="{{ route("admin.complaint.edit",$complaint->id) }}" class="btn btn-primary mr-2"><i class="fa fa-edit"></i></a><button class="btn btn-danger"><i class="fa fa-trash"></i></button></form></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Complaint By</th>
                                        <th>Changes</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section("page-script")
    <script>
        $("#complaints").addClass("active");
    </script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset("public/admin_assets/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/jszip/jszip.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/pdfmake/pdfmake.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/pdfmake/vfs_fonts.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("public/admin_assets/plugins/datatables-buttons/js/buttons.colVis.min.js") }}"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection


@section("page-css")
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset("admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("admin_assets/dist/css/adminlte.min.css") }}">
@endsection
