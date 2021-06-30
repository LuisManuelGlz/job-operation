<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $has_an_expiration_date = $request->has('has_an_expiration_date');

        $request->validate([
            'name' => 'required',
            'issuing_company' => 'required',
            'month_of_issue' => 'required',
            'expiration_date' => $has_an_expiration_date ? 'required' : '',
            'credential_id' => 'required',
            'url' => 'required',
        ]);

        Auth::user()->profile->certifications()->create(
            array_merge(
                $request->all(),
                ['has_an_expiration_date' => $has_an_expiration_date]
            )
        );

        return redirect()->route('profiles.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        //
    }
}
