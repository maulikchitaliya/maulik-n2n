<?php

namespace App\Http\Controllers\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Branch;
use App\Services\BranchService;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    protected $branchService;

    public function __construct(BranchService $branchService)
    {
        $this->branchService = $branchService;
    }

    public function index()
    {
        $branches = $this->branchService->getAllBranches();
        return view('branches.index', compact('branches'));
    }

    public function create()
    {
        return view('branches.create');
    }

    public function store(CreateBranchRequest $request)
    {
        $validatedData = $request->all();
        $this->branchService->createBranch($validatedData);
        return redirect(route('branches.index'))->with('success', 'Branch created successfully.');
    }

    public function edit(Branch $branch)
    {
        return view('branches.edit', compact('branch'));
    }

    public function update(UpdateBranchRequest $request, $id)
    {
        $branch = $this->branchService->getBranchById($id);
        $validatedData = $request->all();
        
        $this->branchService->updateBranch($branch, $validatedData);
        return redirect(route('branches.index'))->with('success', 'Branch updated successfully.');
    }

    public function destroy($id)
    {
        $branch = $this->branchService->getBranchById($id);

        $branch->delete();

        return redirect()->route('branches.index')->with('success', 'Branch deleted successfully!');
    }
}
