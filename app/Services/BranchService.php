<?php

namespace App\Services;

use App\Repositories\BranchRepository;

class BranchService
{
    protected $branchRepo;

    public function __construct(BranchRepository $branchRepo)
    {
        $this->branchRepo = $branchRepo;
    }
    public function getBranchById($id)
    {
        return $this->branchRepo->find($id);
    }

    public function createBranch($data)
    {
        return $this->branchRepo->create($data);
    }

    public function updateBranch($branch, $data)
    {
        return $this->branchRepo->update($branch, $data);
    }

    public function deleteBranch($branch)
    {
        return $this->branchRepo->delete($branch);
    }

    public function getAllBranches()
    {
        return $this->branchRepo->all();
    }
}
