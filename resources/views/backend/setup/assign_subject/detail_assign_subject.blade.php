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
                                <li><a href="#">Detail Nilai Mata Pelajaran</a></li>
                                <li class="active">Lihat Detail Nilai Mata Pelajaran</li>
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
                            <strong class="card-title">Detail Nilai Mata Pelajaran</strong>
                        </div>
                        <div class="card-body">
                            <strong class="card-title">Kelas:
                                {{ $detailData['0']['student_class']['name'] }}</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="25%">Mata Pelajaran</th>
                                        <th width="20%">Full Mark</th>
                                        <th width="20%">Pass Mark</th>
                                        <th width="20%">Subjective Mark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailData as $key => $detail)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $detail['school_subject']['name'] }}</td>
                                            <td>{{ $detail->full_mark }}</td>
                                            <td>{{ $detail->pass_mark }}</td>
                                            <td>{{ $detail->subjective_mark }}</td>
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
