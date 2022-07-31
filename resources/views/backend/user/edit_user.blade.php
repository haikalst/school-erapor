@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Manajemen Pengguna</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Pengguna</a></li>
                                <li class="active">Edit Pengguna</li>
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
                <strong>Edit Pengguna</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('user.update', $editData->id) }}" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Tipe User</label></div>
                        <div class="col-12 col-md-9">
                            <select name="usertype" id="usertype" class="form-control">
                                <option value="" selected="" disabled="">Silakan pilih</option>
                                <option value="Admin" {{ $editData->usertype == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="Pengguna" {{ $editData->usertype == 'Pengguna' ? 'selected' : '' }}>
                                    Pengguna</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class="form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Nama"
                                class="form-control" value="{{ $editData->name }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class="form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control"
                                value="{{ $editData->email }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Edit Pengguna
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
