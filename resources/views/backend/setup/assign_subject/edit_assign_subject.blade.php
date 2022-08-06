@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Mata Pelajaran</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Mata Pelajaran</a></li>
                                <li><a href="#">Nilai Mata Pelajaran</a></li>
                                <li class="active">Edit Nilai Mata Pelajaran</li>
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
                <strong>Edit Nilai Mata Pelajaran</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" action="{{ route('assign.subject.update', $editData['0']->class_id) }}"
                    class="form-horizontal">
                    @csrf
                    <div class="add-item">
                        <div class="form-group">
                            <label for="class_id" class="form-control-label">Kelas</label>
                            <select name="class_id" class="form-control">
                                <option value="" selected="" disabled="">Pilih kelas</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}"
                                        {{ $editData['0']->class_id == $class->id ? 'selected' : '' }}>
                                        {{ $class->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($editData as $edit)
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="subject_id" class="form-control-label">Mata Pelajaran</label>
                                        <select name="subject_id[]" class="form-control">
                                            <option value="" selected="" disabled="">Pilih mata pelajaran
                                            </option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}"
                                                    {{ $edit->subject_id == $subject->id ? 'selected' : '' }}>
                                                    {{ $subject->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="full_mark" class="form-control-label">Full Mark</label>
                                            <input type="text" id="full_mark" name="full_mark[]"
                                                value="{{ $edit->full_mark }}" placeholder="Full Mark" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="pass_mark" class="form-control-label">Pass Mark</label>
                                            <input type="text" id="pass_mark" name="pass_mark[]"
                                                value="{{ $edit->pass_mark }}" placeholder="Pass Mark" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="subjective_mark" class="form-control-label">Subjective Mark</label>
                                            <input type="text" id="subjective_mark" name="subjective_mark[]"
                                                value="{{ $edit->subjective_mark }}" placeholder="Subjective Mark"
                                                class="form-control">
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
                                <i class="fa fa-floppy-o"></i>&nbsp; Edit Nilai Mata Pelajaran
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
                    <div class="col-md-4">
                        <label for="subject_id" class="form-control-label">Mata Pelajaran</label>
                        <select name="subject_id[]" class="form-control">
                            <option value="" selected="" disabled="">Pilih mata pelajaran
                            </option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="full_mark" class="form-control-label">Full Mark</label>
                            <input type="text" id="full_mark" name="full_mark[]" placeholder="Full Mark"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pass_mark" class="form-control-label">Pass Mark</label>
                            <input type="text" id="pass_mark" name="pass_mark[]" placeholder="Pass Mark"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="subjective_mark" class="form-control-label">Subjective Mark</label>
                            <input type="text" id="subjective_mark" name="subjective_mark[]"
                                placeholder="Subjective Mark" class="form-control">
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
