@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Tipe Ujian</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Ujian</a></li>
                                <li><a href="#">Tipe Ujian</a></li>
                                <li class="active">Lihat Tipe Ujian</li>
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
                            <strong class="card-title">Tipe Ujian</strong>
                            <a href="{{ route('exam.type.add') }}" style="float: right" class="btn btn-success"><i
                                    class="fa fa-plus"></i>&nbsp;
                                Tambah Tipe Ujian</a>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Tipe Ujian</th>
                                        <th width="25%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $exam)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $exam->name }}</td>
                                            <td>
                                                <a href="{{ route('exam.type.edit', $exam->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>&nbsp;
                                                    Edit</a>
                                                <a href="{{ route('exam.type.delete', $exam->id) }}"
                                                    class="btn btn-danger btn-sm" id="delete"><i
                                                        class="fa fa-trash"></i>&nbsp;
                                                    Hapus</a>
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
