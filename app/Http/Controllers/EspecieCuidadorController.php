<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EspecieCuidadorController as EspecieCuidadorControllerRequest;

class EspecieCuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EspecieCuidadorControllerRequest\EspecieCuidadorControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EspecieCuidadorControllerRequest\EspecieCuidadorControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EspecieCuidadorControllerRequest\EspecieCuidadorControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EspecieCuidadorControllerRequest\EspecieCuidadorControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EspecieCuidadorControllerRequest\EspecieCuidadorControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EspecieCuidadorControllerRequest\EspecieCuidadorControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EspecieCuidadorControllerRequest\EspecieCuidadorControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EspecieCuidadorControllerRequest\EspecieCuidadorControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EspecieCuidadorControllerRequest\EspecieCuidadorControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EspecieCuidadorControllerRequest\EspecieCuidadorControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
