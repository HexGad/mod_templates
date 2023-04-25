<?php

namespace HexGad\Templates\Http\Controllers;

use HexGad\Templates\Models\Template;
use HexGad\Templates\Http\DataTables\TemplatesDataTable;
use HexGad\Templates\Http\Requests\StoreTemplatesRequest;
use HexGad\Templates\Http\Requests\UpdateTemplatesRequest;
use App\Exceptions\ApiException;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param TemplatesDataTable $datatable
     * @return Renderable|JsonResponse
     */
    public function index(TemplatesDataTable $datatable): Renderable|JsonResponse
    {
        return $datatable->render('templates::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('templates::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTemplatesRequest $request
     *
     * @return JsonResponse
     * @throws ApiException
     */
    public function store(StoreTemplatesRequest $request): JsonResponse
    {
        if($template = Template::create($request->validated()))
            return response()->json($template);

        throw new ApiException;
    }

    /**
     * Show the specified resource.
     *
     * @param Template $template
     *
     * @return Renderable
     */
    public function show(Template $template): Renderable
    {
        return view('templates::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Template $template
     *
     * @return Renderable
     */
    public function edit(Template $template): Renderable
    {
        return view('templates::edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTemplatesRequest $request
     * @param Template $template
     *
     * @return JsonResponse
     * @throws ApiException
     */
    public function update(UpdateTemplatesRequest $request, Template $template): JsonResponse
    {
        if($template->update($request->validated()))
            return response()->json($template);

        throw new ApiException;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Template $template
     *
     * @return JsonResponse
     * @throws ApiException
     */
    public function destroy(Template $template): JsonResponse
    {
        if($template->delete())
            return response()->json($template);

        throw new ApiException;
    }
}
