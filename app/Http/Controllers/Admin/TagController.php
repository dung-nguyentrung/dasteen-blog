<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\StoreRequest;
use App\Http\Requests\Tags\UpdateRequest;
use App\Services\Tags\TagServiceInterface;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class TagController extends Controller
{
    /**
     * __construct
     *
     * @param  TagServiceInterface $tagService
     */
    public function __construct(protected TagServiceInterface $tagService)
    {
        $this->tagService = $tagService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('tag_access'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $tags = $this->tagService->getAll();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('tag_create'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        abort_if(Gate::denies('tag_create'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $payload = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $payload['image'] = FileHelper::store($file, 'tags');
        }
        $this->tagService->create($payload);
        Toastr::success('Tạo chủ đề bài viết thành công', 'Thông báo');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        abort_if(Gate::denies('tag_show'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $tag = $this->tagService->find($id);
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        abort_if(Gate::denies('tag_edit'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $tag = $this->tagService->find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        abort_if(Gate::denies('tag_edit'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $tag = $this->tagService->find($id);
        $payload = $request->validated();
        if ($request->hasFile('image')) {
            FileHelper::delete($tag->image);
            $file = $request->file('image');
            $payload['image'] = FileHelper::store($file, 'tags');
        }
        $this->tagService->update($id, $payload);
        Toastr::success('Cập nhật chủ đề bài viết thành công', 'Thông báo');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_if(Gate::denies('tag_delete'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $tag = $this->tagService->find($id);
        FileHelper::delete($tag->image);
        $this->tagService->delete($id);
        Toastr::success('Xóa chủ đề bài viết thành công', 'Thông báo');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @return \Illuminate\Http\Response
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('tag_delete'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');

        $ids = $request->ids;
        $this->tagService->massDestroy($ids);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
