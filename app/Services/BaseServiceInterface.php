<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface BaseServiceInterface
{
    /**
     * getAll
     *
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * create
     *
     * @param  array $data
     * @return mixed
     */
    public function create(array $data): mixed;

    /**
     * update
     *
     * @param  int $id
     * @param  array $data
     * @return mixed
     */
    public function update(int $id, array $data): mixed;

    /**
     * delete
     *
     * @param  int $id
     * @return mixed
     */
    public function delete(int $id): mixed;

    /**
     * find
     *
     * @param  int $id
     * @return mixed
     */
    public function find(int $id): mixed;

    /**
     * massDestroy
     *
     * @param  array $ids
     * @return mixed
     */
    public function massDestroy(array $ids): mixed;
}
