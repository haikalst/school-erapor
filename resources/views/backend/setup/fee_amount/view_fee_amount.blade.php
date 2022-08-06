@extends('admin.admin_master')
@section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Pembayaran</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Pembayaran</a></li>
                                <li><a href="#">Harga Pembayaran</a></li>
                                <li class="active">Lihat Harga Pembayaran</li>
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
                            <strong class="card-title">Harga Pembayaran</strong>
                            <a href="{{ route('fee.amount.add') }}" style="float: right" class="btn btn-success"><i
                                    class="fa fa-plus"></i>&nbsp;
                                Tambah Harga Pembayaran</a>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Harga Pembayaran</th>
                                        <th width="25%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $amount)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $amount['fee_category']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('fee.amount.edit', $amount->fee_category_id) }}"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>&nbsp;
                                                    Edit</a>
                                                <a href="{{ route('fee.amount.detail', $amount->fee_category_id) }}"
                                                    class="btn btn-info btn-sm"><i class="fa fa-info"></i>&nbsp;
                                                    Detail</a>
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
