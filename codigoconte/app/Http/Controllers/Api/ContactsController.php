<?php

namespace apiPoseidon\Http\Controllers\Api;

use apiPoseidon\Http\Controllers\Controller;
use apiPoseidon\Http\Controllers\Response;
use Illuminate\Http\Request;

use apiPoseidon\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use apiPoseidon\Http\Requests\ContactRequest;
use apiPoseidon\Http\Requests\ContactUpdateRequest;
use apiPoseidon\Repositories\ContactRepository;



class ContactsController extends Controller
{
	
    /**
     * @var CategoryRepository
     */
    protected $repository;
	
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
        
    }

    public function index()
    {    	
    	//$this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria')); 		      
        return $this->repository->all();
    }

    public function store(ContactRequest $request)
    {
    	 	
        $category = $this->repository->create($request->all());		
        return response()->json($category, 201);
    }
	
	public function show($id)
    {
        return $this->repository->find($id);
    }

    public function findOne($category_id, $cities_id)
    {  	
        return $this->repository->findWhere([
        'category_id'=> $category_id,
        'cities_id' => $cities_id,        
        ]);
    }

    public function update(ContactRequest $request, $id)
    {
        $category = $this->repository->update($request->all(),$id);
        return response()->json($category, 200);
    }

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