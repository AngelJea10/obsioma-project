<?php

namespace App\Http\Controllers;

use App\Models\ClassroomStudent;
use Illuminate\Http\Request;

class ClassroomStudentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response("SUCCESS!!", 200);
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
    public function show(ClassroomStudent $classroomStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassroomStudent $classroomStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassroomStudent $classroomStudent)
    {
        //
    }
}
