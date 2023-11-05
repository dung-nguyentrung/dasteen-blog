@extends('admin.layouts.app')

@section('title', 'Thêm chủ đề bài viết')

@section('content')
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Thêm chủ đề bài viết</h4>
                        </div>
                        <a href="{{ route('tags.index') }}" class="btn btn-primary float-right">Quay lại</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tags.store') }}" method="POST" data-toggle="validator"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên chủ đề bài viết</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Nhập tên chủ đề bài viết">
                                        @error('title')
                                            <div class="help-block with-errors text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br />
                                        <input type="file" name="image">
                                        @error('image')
                                            <div class="help-block with-errors text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả chủ đề bài viết</label>
                                        <textarea rows="5" name="description" class="form-control" placeholder="Nhập Mô tả chủ đề bài viết"></textarea>
                                        @error('description')
                                            <div class="help-block with-errors text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Lưu lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection
