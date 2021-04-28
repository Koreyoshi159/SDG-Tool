<?php

namespace App\Http\Controllers;

use App\Models\Sdg;
use App\Models\Blog;
use App\Models\Activity;
use App\Models\BusinessOperation;
use App\Models\Program;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdg = Sdg::latest()->get();
        $activity = Activity::latest()->get();
        $business_operation = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();

        return view('blogs.create', compact(['sdg', 'activity', 'business_operation', 'programs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sdg = Sdg::latest()->get();
        $activity = Activity::latest()->get();
        $business_operation = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();

        return view('blogs.create', compact(['sdg', 'activity', 'business_operation', 'programs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Blog $blog, Request $request)
    {
        Blog::create($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $sdg = Sdg::latest()->get();
        $activity = Activity::latest()->get();
        $business_operation = BusinessOperation::latest()->get();
        $programs = Program::latest()->get();

        return view('blogs.edit', compact('blog', 'programs', 'sdg', 'activity', 'business_operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($this->getValidate($request));
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route('admin.index'));
    }

    protected function getValidate()
    {
        return request()->validate([
            'program_id' => 'nullable',
            'business_operation_id' => 'nullable',
            'research_group_id' => 'nullable',
            'activity_id' => 'nullable',
            'description' => 'required',
            'impact' => 'required',
            'link' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required'
        ]);
    }
}
