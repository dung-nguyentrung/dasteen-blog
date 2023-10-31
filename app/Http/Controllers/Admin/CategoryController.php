<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\StoreRequest;
use App\Http\Requests\Categories\UpdateRequest;
use App\Services\Categories\CategoryServiceInterface;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * __construct
     *
     * @param  CategoryServiceInterface $categoryService
     */
    public function __construct(protected CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('category_access'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $categories = $this->categoryService->getAll();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('category_create'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        abort_if(Gate::denies('category_create'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $payload = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $payload['image'] = FileHelper::store($file, 'categories');
        }
        $this->categoryService->create($payload);
        Toastr::success('Tạo danh mục bài viết thành công', 'Thông báo');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        abort_if(Gate::denies('category_show'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $category = $this->categoryService->find($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        abort_if(Gate::denies('category_edit'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $category = $this->categoryService->find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        abort_if(Gate::denies('category_edit'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $category = $this->categoryService->find($id);
        $payload = $request->validated();
        if ($request->hasFile('image')) {
            FileHelper::delete($category->image);
            $file = $request->file('image');
            $payload['image'] = FileHelper::store($file, 'categories');
        }
        $this->categoryService->update($id, $payload);
        Toastr::success('Cập nhật danh mục bài viết thành công', 'Thông báo');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');
        $category = $this->categoryService->find($id);
        FileHelper::delete($category->image);
        $this->categoryService->delete($id);
        Toastr::success('Xóa danh mục bài viết thành công', 'Thông báo');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @return \Illuminate\Http\Response
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, 'Bạn không có quyền truy cập !');

        $ids = $request->ids;

        $this->categoryService->massDestroy($ids);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
