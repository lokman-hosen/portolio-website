<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessCategoryRequest;
use App\Http\Requests\UpdateBusinessCategoryRequest;
use App\Models\BusinessCategory;
use App\Services\BusinessCategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Inertia\Inertia;
use Inertia\Response;

class BusinessCategoryController extends Controller
{
    const moduleDirectory = 'Admin/Business-category/';
    public function __construct(protected BusinessCategoryService $businessCategoryService)
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $data = [
            'pageTitle' => 'Business Category List',
            'tableHeads' => ['Sr. No', 'Name', 'Status', 'Action'],
            'businessCategories' =>$this->businessCategoryService->getAllData()
        ];
        return Inertia::render(self::moduleDirectory.'Index', $data);
    }

    public function getData(Request $request): JsonResponse
    {
        return $this->businessCategoryService->getAllData($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : view
    {
        $data = [
            'pageTitle' => 'Business Category Create',
        ];
        return view(self::moduleDirectory.'create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusinessCategoryRequest $request): RedirectResponse
    {
        $category = $this->businessCategoryService->create($request->all());
        if ($category) {
            $request->session()->flash('success', setMessage('create', 'Business Category'));
        } else {
            $request->session()->flash('error', setMessage('create.error', 'Business Category'));
        }
        return to_route('admin.business-categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessCategory $businessCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessCategory $businessCategory) : view
    {
        $data = [
            'pageTitle' => 'Business Category Edit',
            'businessCategory' => $businessCategory,
        ];
        return view(self::moduleDirectory.'edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusinessCategoryRequest $request, BusinessCategory $businessCategory): RedirectResponse
    {
        $companyFormat = $this->businessCategoryService->update($request->all(), $businessCategory->id);
        if ($companyFormat) {
            $request->session()->flash('success', setMessage('update', 'Business Category'));
        } else {
            $request->session()->flash('error', setMessage('update.error', 'Business Category'));
        }
        return to_route('admin.business-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessCategory $businessCategory)
    {
        //
    }
}
