@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Tambah Tahun Ajaran</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Manajemen Sekolah</a></li>
                                <li><a href="#">Data Tahun Ajaran</a></li>
                                <li class="active">Tambah Tahun Ajaran</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Tahun Ajaran</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('student.year.store') }}" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class="form-control-label">Tahun Ajaran</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name"
                                placeholder="Tahun Ajaran" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Simpan Tahun Ajaran
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
