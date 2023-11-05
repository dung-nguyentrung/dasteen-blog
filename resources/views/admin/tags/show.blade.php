    @extends('admin.layouts.app')

    @section('title', $tag->title)

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">{{ $tag->title }}</h4>
                        </div>
                        <div>
                            @can('tag_access')
                                <a href="{{ route('tags.index') }}" class="btn btn-primary add-list"></i>Quay lại</a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        <table class="table mb-0 tbl-server-info">
                            <tbody class="ligth-body">
                                <tr>
                                    <th>Mã</th>
                                    <th>{{ $tag->id }}</th>
                                </tr>
                                <tr>
                                    <th>Tên chủ đề</th>
                                    <th>{{ $tag->title }}</th>
                                </tr>
                                <tr>
                                    <th>Hình ảnh chủ đề</th>
                                    <th>
                                        <img width="200" src="/{{ $tag->image }}" alt="{{ $tag->title }}">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Mô tả chủ đề</th>
                                    <th>
                                        {{ $tag->description }}
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
