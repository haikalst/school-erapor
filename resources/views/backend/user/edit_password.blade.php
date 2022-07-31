@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Ubah Password</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Profil</a></li>
                                <li class="active">Ubah Password</li>
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
                <strong>Edit Password</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('password.update') }}" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="current_password" class="form-control-label">Password Lama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="current_password" name="current_password" class="form-control"
                                value="">
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class="form-control-label">Password Baru</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password" name="password" class="form-control" value="">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password_confirmation" class="form-control-label">Konfirmasi Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" value="">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Edit Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
