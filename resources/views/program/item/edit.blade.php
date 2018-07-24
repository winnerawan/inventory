@extends('program.template')

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
                <h3 class="text-themecolor">Barang</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('program/home') }}">Home</a></li>
                    <li class="breadcrumb-item">Barang</li>
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
                            <h4 class="m-b-0 text-white">Form Edit Master Barang</h4>
                        </div>
                        <div class="card-body">
                            {!! Form::model($item, ['route' => ['item.update', $item->id], 'method' => 'PUT', 'files' => true]) !!}
                            <div class="form-group">
                                <div class="form-body">
                                    <h3 class="card-title">Info Master Barang</h3>
                                    <hr>
                                    <div class="row p-t-20">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Barang</label>
                                                    <select name="stuff_id" id="stuff_id" class="form-control custom-select">
                                                        @foreach($stuffs as $stuff)
                                                            <option value="{{ $stuff->id }}">{{ $stuff->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Kondisi</label>
                                                <select name="condition_id" id="condition_id" class="form-control custom-select">
                                                    @foreach($conditions as $condition)
                                                        <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Lokasi</label>
                                                {{ Form::text('location', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Jumlah</label>
                                                {{ Form::text('quantity', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>


                                    </div>
                                    <!--/row-->
                                    {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group has-success">--}}
                                    {{--<label class="control-label">Lokasi</label>--}}
                                    {{--{{ Form::text('location', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}--}}
                                    {{--</div>--}}
                                    {{--</div>--}}

                                    {{--</div>--}}

                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    {!! Form::close() !!}
                                    <a href="{{ url()->previous() }}" class="btn btn-inverse">Cancel</a>
                                    {!! Form::open(['route' => ['item.destroy', $item->id], 'method' => 'DELETE']) !!}
                                    <button type="submit" style="margin-top: 10px;" class="btn btn-danger"> <i class="fa fa-times"></i> Delete</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
@endsection
