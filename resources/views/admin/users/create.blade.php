@extends('admin.template')

@section('content')

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Pengguna</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
                    <li class="breadcrumb-item">Pengguna</li>
                </ol>
            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Form Tambah Pengguna</h4>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'users.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                            <div class="form-group">
                                <div class="form-body">
                                    <h3 class="card-title">Info Pengguna</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama</label>
                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                {{ Form::password('password', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Roles</label>
                                                <select name="role_id" id="role_id" class="form-control custom-select">
                                                    @foreach($roles as $role)
                                                        <option value="{{ $role->id }}">{{ \Illuminate\Support\Str::upper($role->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Prodi</label>
                                                <select name="program_id" id="program_id" class="form-control custom-select">
                                                    @foreach($programs as $program)
                                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-inverse">Cancel</a>                                </div>
                                {!! Form::close() !!}
                            </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
@endsection
