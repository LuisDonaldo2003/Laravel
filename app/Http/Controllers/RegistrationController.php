<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Period;
use App\Models\Activity;
use App\Models\Instructor;
use App\Models\Group;
use App\Models\Area;
use App\Models\Career;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periods = Period::all();
        $activities = Activity::all();
        $instructors = Instructor::all();
        $groups = Group::all();
        $areas = Area::all();
        $careers = Career::all();

        return view('registration.create', compact('periods', 'activities', 'instructors', 'groups', 'areas', 'careers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'period_id' => 'required',
            'activity_id' => 'required',
            'instructor_id' => 'required',
            'group_id' => 'required',
            'area_id' => 'required',
            'student_id' => 'required',
            'grade' => 'required',
            'career_id' => 'required',
        ]);

        Registration::create($data);

        return redirect()->route('registration.create')->with('success', 'Inscripción exitosa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
