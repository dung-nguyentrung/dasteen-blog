<?php

namespace App\Services;

use App\Repositories\BaseRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

abstract class BaseService implements BaseServiceInterface
{
    protected $baseRepo;

    /**
     * __construct
     *
     * @param  BaseRepositoryInterface $baseRepo
     */
    public function __construct(BaseRepositoryInterface $baseRepo)
    {
        $this->baseRepo = $baseRepo;
    }

    /**
     * getAll
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        try {
            return $this->baseRepo->all();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * create
     *
     * @param  array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        try {
            return $this->baseRepo->create($data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * update
     *
     * @param  int $id
     * @param  array $data
     * @return mixed
     */
    public function update(int $id, array $data): mixed
    {
        try {
            return $this->baseRepo->update($id, $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * delete
     *
     * @param  int $id
     * @return mixed
     */
    public function delete(int $id): mixed
    {
        try {
            return $this->baseRepo->delete($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * find
     *
     * @param  int $id
     * @return mixed
     */
    public function find(int $id): mixed
    {
        try {
            return $this->baseRepo->find($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * massDestroy
     *
     * @param  array $ids
     * @return mixed
     */
    public function massDestroy(array $ids): mixed
    {
        try {
            return $this->baseRepo->massDestroy($ids);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
