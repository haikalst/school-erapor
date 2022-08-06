@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Tambah Tipe Ujian</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Ujian</a></li>
                                <li><a href="#">Tipe Ujian</a></li>
                                <li class="active">Tambah Tipe Ujian</li>
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
                <strong>Tambah Tipe Ujian</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('exam.type.store') }}" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class="form-control-label">Tipe Ujian</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name"
                                placeholder="Tipe Ujian" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Simpan Tipe Ujian
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
