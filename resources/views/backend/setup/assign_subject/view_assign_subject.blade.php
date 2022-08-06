@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Mata Pelajaran</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Mata Pelajaran</a></li>
                                <li><a href="#">Nilai Mata Pelajaran</a></li>
                                <li class="active">Lihat Nilai Mata Pelajaran</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Nilai Mata Pelajaran</strong>
                            <a href="{{ route('assign.subject.add') }}" style="float: right" class="btn btn-success"><i
                                    class="fa fa-plus"></i>&nbsp;
                                Tambah Nilai Mata Pelajaran</a>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Kelas</th>
                                        <th width="25%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $assign)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $assign['student_class']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('assign.subject.edit', $assign->class_id) }}"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>&nbsp;
                                                    Edit</a>
                                                <a href="{{ route('assign.subject.detail', $assign->class_id) }}"
                                                    class="btn btn-info btn-sm"><i class="fa fa-info"></i>&nbsp;
                                                    Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
@endsection
