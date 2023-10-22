<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use App\Services\Permissions\PermissionServiceInterface;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    /**
     * __construct
     *
     * @param  PermissionServiceInterface $permissionService
     */
    public function __construct(protected PermissionServiceInterface $permissionService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permission = $this->permissionService->getAll();
        return view('admin.permissions.index', compact('permission'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
    {
        $payload = $request->validated();
        $this->permissionService->create($payload);
        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $permission = $this->permissionService->find($id);
        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  \App\Http\Requests\UpdatePermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(int $id, UpdatePermissionRequest $request)
    {

        $payload = $request->validated();
        $this->permissionService->update($id, $payload);

        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $this->permissionService->delete($id);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Http\Requests\MassDestroyPermissionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        $ids = $request->ids;
        $this->permissionService->massDestroy($ids);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
