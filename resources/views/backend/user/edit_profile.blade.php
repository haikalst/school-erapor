@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                <li class="active">Edit Profil</li>
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
                <strong>Edit Profil</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('profile.store') }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
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
                            <label for="mobile" class="form-control-label">No Telepon</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="mobile" name="mobile" placeholder="No Telepon"
                                class="form-control" value="{{ $editData->mobile }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="address" class="form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="address" name="address" placeholder="Alamat" class="form-control"
                                value="{{ $editData->address }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="gender" class=" form-control-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="gender" id="gender" class="form-control">
                                <option value="" selected="" disabled="">Silakan pilih</option>
                                <option value="Laki-laki" {{ $editData->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="Perempuan" {{ $editData->gender == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="image" class=" form-control-label">Foto Profil</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="file" id="image" name="image"
                                class="form-control-file"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="image" class=" form-control-label"></label>
                        </div>
                        <div class="col-12 col-md-9"><img
                                src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/no-image.jpg') }}"
                                alt="Profile Image" id="showImage"
                                style="width:100px; height:100px; border: 1px solid #000;"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Edit Profil
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
