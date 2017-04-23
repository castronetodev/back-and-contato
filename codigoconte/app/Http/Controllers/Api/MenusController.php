<?php

namespace apiPoseidon\Http\Controllers\Api;

use apiPoseidon\Http\Controllers\Controller;
use apiPoseidon\Http\Controllers\Response;
use Illuminate\Http\Request;

use apiPoseidon\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use apiPoseidon\Http\Requests\MenuRequest;
use apiPoseidon\Http\Requests\MenuUpdateRequest;
use apiPoseidon\Repositories\MenuRepository;


class MenusController extends Controller
{

    /**
     * @var MenuRepository
     */
    protected $repository;

    /**
     * @var MenuValidator
     */
    protected $validator;

    public function __construct(MenuRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {

        return $this->repository->all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MenuRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $menu = $this->repository->create($request->all());
        return response()->json($menu, 201);
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  MenuUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(MenuRequest $request, $id)
    {
        $menu = $this->repository->update( $request->all(), $id);
        return response()->json($menu, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        if($deleted){
            return response()->json([], 204);
        }else{
            return response()->json([
                'error' => 'Resource can not be deleted'
            ], 500);
        }
    }
}
