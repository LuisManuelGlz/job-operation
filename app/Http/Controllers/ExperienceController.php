<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current_job = $request->has('current_job');

        $request->validate([
            'position' => 'required',
            'company' => 'required',
            'location' => 'required',
            'from_date' => 'required',
            'to_date' => $current_job ? '' : 'required',
            'description' => 'required',
        ]);

        Auth::user()->profile->experience()->create(
            array_merge(
                $request->all(),
                ['current_job' => $current_job]
            )
        );

        return redirect()->route('profiles.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('experience.edit', ['experience' => $experience]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $current_job = $request->has('current_job');

        $request->validate([
            'position' => 'required',
            'company' => 'required',
            'location' => 'required',
            'from_date' => 'required',
            'to_date' => $current_job ? '' : 'required',
            'description' => 'required',
        ]);

        $experience->update(array_merge(
            $request->all(),
            ['current_job' => $current_job]
        ));

        return redirect()->route('profiles.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
