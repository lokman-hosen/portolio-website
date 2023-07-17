<?php

namespace App\Services;

use App\Models\BusinessCategory;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

//use DataTables;

/**
 * Class UserService
 * @package App\Services\Admin
 */
class BusinessCategoryService extends BaseService
{
    public function __construct(
      protected BusinessCategory $businessCategory
    ){
        $this->model = $this->businessCategory;
    }


    public function getAllData()
    {
        return $this->businessCategory->get();
    }

    public function listByStatus()
    {
        return $this->businessCategory->where('status', 1)
            ->orderBy('name', 'asc')
            ->get(['name', 'id']);
    }


}
