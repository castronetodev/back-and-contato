<?php

namespace apiPoseidon\Http\Controllers\Api;

use Illuminate\Http\Request;

use apiPoseidon\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use apiPoseidon\Http\Requests\CategoryRequest;
use apiPoseidon\Http\Requests\CategoryUpdateRequest;
use apiPoseidon\Repositories\CategoryRepository;

use apiPoseidon\Http\Controllers\Controller;




class CategoriesController extends Controller
{

    /**
     * @var CategoryRepository
     */
    protected $repository;



    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

            $category = $this->repository->create($request->all());
            return response()->json($category, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  $this->repository->find($id);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(CategoryRequest $request, $id)
    {
            $category = $this->repository->update( $request->all(), $id);
            return response()->json($category, 200);
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
