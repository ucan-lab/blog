<?php

namespace App\Http\Controller;

use App\Repositories\User\UserRepositoryInterface;

class UsersController extends Controller
{
    public function __construct(UserRepositoryInterface $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    public function index()
    {
        return $this->user_repository->getFirstRecordByName($name);
    }
}
