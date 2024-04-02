<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RecintoActividadController as RecintoActividadControllerRequest;

class RecintoActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param RecintoActividadControllerRequest\RecintoActividadControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(RecintoActividadControllerRequest\RecintoActividadControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param RecintoActividadControllerRequest\RecintoActividadControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(RecintoActividadControllerRequest\RecintoActividadControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param RecintoActividadControllerRequest\RecintoActividadControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(RecintoActividadControllerRequest\RecintoActividadControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param RecintoActividadControllerRequest\RecintoActividadControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(RecintoActividadControllerRequest\RecintoActividadControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param RecintoActividadControllerRequest\RecintoActividadControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(RecintoActividadControllerRequest\RecintoActividadControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
