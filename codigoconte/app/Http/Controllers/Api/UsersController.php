<?php

namespace apiPoseidon\Http\Controllers\Api;

use Illuminate\Http\Request;
use apiPoseidon\Http\Controllers\Controller;
use apiPoseidon\Http\Requests\UserRequest;
use apiPoseidon\Repositories\UserRepository;

class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(UserRequest $request){
        $user = $this->repository->create($request->all());
        return response()->json($user,201);
    }
}
