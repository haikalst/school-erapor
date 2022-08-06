@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                <li class="active">Edit Harga Pembayaran</li>
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
                <strong>Edit Harga Pembayaran</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('fee.amount.update', $editData['0']->fee_category_id) }}"
                    class="form-horizontal">
                    @csrf
                    <div class="add-item">
                        <div class="form-group">
                            <label for="fee_category_id" class="form-control-label">Kategori Pembayaran</label>
                            <select name="fee_category_id" class="form-control">
                                <option value="" selected="" disabled="">Pilih kategori pembayaran</option>
                                @foreach ($fee_categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $editData['0']->fee_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($editData as $edit)
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="class_id" class="form-control-label">Kelas</label>
                                        <select name="class_id[]" class="form-control">
                                            <option value="" selected="" disabled="">Pilih kelas</option>
                                            @foreach ($classes as $class)
                                                <option value="{{ $class->id }}"
                                                    {{ $edit->class_id == $class->id ? 'selected' : '' }}>
                                                    {{ $class->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="amount" class="form-control-label">Harga</label>
                                            <input type="text" id="amount" name="amount[]" value="{{ $edit->amount }}"
                                                placeholder="Harga" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding-top: 25px;">
                                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                        <span class="btn btn-danger removeeventmore"><i
                                                class="fa fa-minus-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-floppy-o"></i>&nbsp; Edit Harga
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="row">
                    <div class="col-md-5">
                        <label for="class_id" class="form-control-label">Kelas</label>
                        <select name="class_id[]" class="form-control">
                            <option value="" selected="" disabled="">Pilih kelas</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="amount" class="form-control-label">Harga</label>
                            <input type="text" id="amount" name="amount[]" placeholder="Harga" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 25px;">
                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                        <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add-item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function(event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1;
            });
        });
    </script>
@endsection
