@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Manajemen Sekolah</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Manajemen Sekolah</a></li>
                                <li><a href="#">Data Kelas</a></li>
                                <li class="active">Edit Kelas</li>
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
                <strong>Edit Kelas</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('student.class.update', $editData->id) }}" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class="form-control-label">Nama Kelas</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name"
                                placeholder="Nama Kelas" class="form-control" value="{{ $editData->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Edit Kelas
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
