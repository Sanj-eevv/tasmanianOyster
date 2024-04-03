<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as DbBuilder;

class BaseRepository implements BaseRepositoryInterface
{

     protected Model $model;

     public function __construct(Model $model)
     {
          $this->model = $model;
     }

     public function all(): mixed
     {
          return $this->model->all();
     }


     public function paginatedWithQuery(array $meta, $query = null): array
     {
          if(!$query){
               $query = $this->model;
          }
          return $this->offsetAndSort($meta, $query);
     }


     public function store(array $input) : mixed
     {
          return $this->model->query()->create($input);
     }


     public function update(array $input, Model $modelObj) : Model
     {
          $modelObj->query()->update($input);
          return $modelObj;
     }

     public function delete(Model $modelObj) : ?bool
     {
          return $modelObj->delete();
     }

     public function destroy(array $ids) : int
     {
          return $this->model->destroy($ids);
     }

     public function find($id, bool $failure = true)
     {
          if ($failure) {
               return $this->model->query()->findOrFail($id);
          }else{
               return $this->model->query()->find($id);
          }
     }

     public function offsetAndSort(array $meta, DbBuilder|Builder $query) : array
     {
          $total = $query->count();
          $query->orderBy($meta['order'], $meta['dir']);
          if ($meta['limit'] != '-1') {
               $query->offset($meta['offset'])->limit($meta['limit']);
          }
          return [
               'data'            => $query->get(),
               'recordsTotal'    => $total,
               'recordsFiltered' => $total,
          ];
     }

     public function upsert(array $values, array $uniqueBy, array $update) : int
     {
          return $this->model->query()->upsert($values, $uniqueBy, $update);
     }

}
