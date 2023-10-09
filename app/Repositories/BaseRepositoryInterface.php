<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
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
     * all
     *
     * @return mixed
     */
    public function all(): mixed;


    /**
     * all
     *
     * @param array $ids
     * @return mixed
     */
    public function massDestroy(array $ids): mixed;
}
