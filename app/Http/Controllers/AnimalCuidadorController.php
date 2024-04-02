<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AnimalCuidadorController as AnimalCuidadorControllerRequest;

class AnimalCuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param AnimalCuidadorControllerRequest\AnimalCuidadorControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(AnimalCuidadorControllerRequest\AnimalCuidadorControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param AnimalCuidadorControllerRequest\AnimalCuidadorControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(AnimalCuidadorControllerRequest\AnimalCuidadorControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param AnimalCuidadorControllerRequest\AnimalCuidadorControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(AnimalCuidadorControllerRequest\AnimalCuidadorControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param AnimalCuidadorControllerRequest\AnimalCuidadorControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(AnimalCuidadorControllerRequest\AnimalCuidadorControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param AnimalCuidadorControllerRequest\AnimalCuidadorControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(AnimalCuidadorControllerRequest\AnimalCuidadorControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
