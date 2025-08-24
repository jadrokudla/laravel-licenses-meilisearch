<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->get('search');
        
        if ($query) {
            $licenses = License::search($query)->get();
        } else {
            $licenses = License::all();
        }
        
        return view('licenses', compact('licenses', 'query'));
    }

    /**
     * Search licenses using Meilisearch
     */
    public function search(Request $request)
    {
        $query = $request->get('q', '');
        
        // Perform search
        if (empty($query)) {
            $licenses = License::all();
        } else {
            $licenses = License::search($query)->get();
        }
        
        // Apply additional filters after search
        if ($request->has('gender') && $request->gender !== '') {
            $licenses = $licenses->where('gender', $request->gender);
        }
        
        if ($request->has('age_group') && $request->age_group !== '') {
            $licenses = $licenses->where('age_group', $request->age_group);
        }
        
        if ($request->has('race') && $request->race !== '') {
            $licenses = $licenses->where('race', $request->race);
        }
        
        if ($request->has('training') && $request->training !== '') {
            $licenses = $licenses->where('training', $request->training);
        }
        
        if ($request->has('qualified') && $request->qualified !== '') {
            $licenses = $licenses->where('qualified', (bool)$request->qualified);
        }
        
        return response()->json([
            'licenses' => $licenses->values(),
            'total' => $licenses->count(),
            'query' => $query
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method can be used to show a form for creating a new license
        return view('licenses_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'applicant_id' => 'required|integer',
            'gender' => 'required|string',
            'age_group' => 'required|string',
            'race' => 'required|string',
            'training' => 'required|string',
            'signals' => 'required|integer',
            'yield' => 'required|integer',
            'speed_control' => 'required|integer',
            'night_drive' => 'required|integer',
            'road_signs' => 'required|integer',
            'steer_control' => 'required|integer',
            'mirror_usage' => 'required|integer',
            'confidence' => 'required|integer',
            'parking' => 'required|integer',
            'theory_test' => 'required|integer',
            'reactions' => 'required|integer',
            'qualified' => 'required|boolean',
        ]);

        License::create($request->all());

        return redirect()->route('licenses.index')->with('success', 'Kontakt bol úspešne pridaný.');

    }

    /**
     * Display the specified resource.
     */
    public function show(License $license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(License $license)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, License $license)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(License $license)
    {
        //
    }

    public function parking()
    {
        $licenses = License::orderBy('parking', 'desc')->get();
        return view('licenses_parking', compact('licenses'));

        
    }

    /**
     * Show the search page for licenses.
     */
    public function searchPage()
    {
        return view('licenses_search');
    }

    
    public function sortByAgeGroup()
    {
        $licenses = License::all()->sort(function ($a, $b) {
            $ageA = $a->age_group;
            $ageB = $b->age_group;
            
            $isNumericA = is_numeric($ageA);
            $isNumericB = is_numeric($ageB);
            
            if ($isNumericA && $isNumericB) {
                return (int)$ageB <=> (int)$ageA; 
            }
            
            if ($isNumericA && !$isNumericB) {
                return -1;
            }
            
            if (!$isNumericA && $isNumericB) {
                return 1;
            }
            
            return strcmp($ageA, $ageB);
        });

        return view('licenses_age_group', compact('licenses'));
    }
}


