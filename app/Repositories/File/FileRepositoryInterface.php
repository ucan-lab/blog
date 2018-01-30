<?php

namespace App\Repositories\File;
use App\Models\File;

interface FileRepositoryInterface
{
    public function index();
    public function save(File $file);
    public function delete(File $file);
}
