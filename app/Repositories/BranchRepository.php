<?php
namespace App\Repositories;

use App\Models\Branch;

class BranchRepository
{
    protected $branch;

    public function __construct(Branch $branch)
    {
        $this->branch = $branch;
    }
    public function find($id)
    {
        return $this->branch->findOrFail($id);
    }
    public function create(array $data)
    {
        return Branch::create($data);
    }

    public function update(Branch $branch, array $data)
    {
        $branch->update($data);
        return $branch;
    }

    public function delete(Branch $branch)
    {
        return $branch->delete();
    }

    public function all()
    {
        return Branch::all();
    }

    
}
