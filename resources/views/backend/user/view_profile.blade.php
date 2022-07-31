@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Manajemen Profil</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Profil</a></li>
                                <li class="active">Lihat Profil</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title mb-3">Profil Anda</strong>
                    <a href="{{ route('profile.edit') }}" style="float: right" class="btn btn-success"><i
                            class="fa fa-pencil"></i>&nbsp;
                        Edit Profil</a>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="align-self-center rounded-circle mx-auto d-block" style="width:85px; height:85px;"
                            alt="Profile image"
                            src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/no-image.jpg') }}">
                        <h5 class="text-sm-center mt-2 mb-1">Username: {{ $user->name }}</h5>
                        <div class="location text-sm-center"></i>Tipe User: {{ $user->usertype }}
                        </div>
                        <div class="text-sm-center"></i>Email: {{ $user->email }}
                        </div>
                        <div class="text-sm"></i>No Telepon: {{ $user->mobile }}
                        </div>
                        <div class="text-sm"></i>Alamat: {{ $user->address }}
                        </div>
                        <div class="text-sm"></i>Jenis Kelamin: {{ $user->gender }}
                        </div>
                    </div>
                    <hr>
                    <div class="card-text text-sm-center">
                        <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                        <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                        <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                        <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
