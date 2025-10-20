<?php

namespace App\Http\Controllers\Admin;

use App\Models\MasterRule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\DB;

class MasterRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rules = MasterRule::with(['penyakit', 'gejala'])->get();

        return view('admin.rule.index', compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterRule $masterRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MasterRule $masterRule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MasterRule $masterRule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterRule $masterRule)
    {
        //
    }
}
