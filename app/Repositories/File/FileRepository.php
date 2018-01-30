<?php

namespace App\Repositories\File;

use App\Models\File;

class FileRepository implements FileRepositoryInterface
{
    protected $file;

    /**
    * @param object $file
    */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function index()
    {
        return $this->file->all();
    }

    public function save(File $file)
    {
        return $file->save();
    }

    public function delete(File $file)
    {
        return $file->delete();
    }
}
