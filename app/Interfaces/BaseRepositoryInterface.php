<?php
declare(strict_types = 1);

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as DbBuilder;

interface BaseRepositoryInterface
{
    public function all():  mixed;

    public function paginatedWithQuery(array $meta, $query = null);


    public function store(array $input);


    public function update(array $input, Model $modelObj);

     public function upsert(array $values, array $uniqueBy, array $update): int;

     public function find(string|int $id, bool $failure = true);


    public function delete(Model $modelObj);


    public function destroy(array $ids);


    public function offsetAndSort(array $meta, DbBuilder|Builder $query);
}
