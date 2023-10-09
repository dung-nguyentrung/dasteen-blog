<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    public Model $model;

    /**
     * __construct
     *
     * @param  Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    /**
     * create
     *
     * @param  array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return $this->model->create($data);
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
        $model = $this->find($id);
        return $model->update($data);
    }

    /**
     * delete
     *
     * @param  int $id
     * @return mixed
     */
    public function delete(int $id): mixed
    {
        return $this->model->delete($id);
    }

    /**
     * find
     *
     * @param  int $id
     * @return mixed
     */
    public function find(int $id): mixed
    {
        return $this->model->find($id);
    }

    /**
     * all
     *
     * @return mixed
     */
    public function all(): mixed
    {
        return $this->model->all();
    }

    /**
     * all
     *
     * @param array $ids
     * @return mixed
     */
    public function massDestroy(array $ids): mixed
    {
        $this->model->whereIn('id', $ids)->delete();
    }
}
