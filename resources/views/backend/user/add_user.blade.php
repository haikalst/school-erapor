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
                                <li class="active">Tambah Pengguna</li>
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
                <strong>Tambah Pengguna</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('user.store') }}" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Tipe User</label></div>
                        <div class="col-12 col-md-9">
                            <select name="usertype" id="usertype" class="form-control">
                                <option value="" selected="" disabled="">Silakan pilih</option>
                                <option value="Admin">Admin</option>
                                <option value="Pengguna">Pengguna</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="name" class="form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Nama"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class="form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="password" class="form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="password" id="password" name="password"
                                placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Simpan Pengguna
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
