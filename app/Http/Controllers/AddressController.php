<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //make a public function
    public function index()
    {
        $divisions = Division::with('districts.thanas')->select('id', 'name')->get();
        return view('dropdowns.address', compact('divisions'));
    }

    public function loadDistricts(Request $request)
    {
        $divisionId = $request->input('division_id');
        $divisions = Division::with('districts.thanas')->select('id', 'name')->get();
        $selectedDivision = Division::with('districts.thanas')->where('id', $divisionId)->first();

        return view(
            'dropdowns.address', compact('divisions', 'selectedDivision')
        );
    }

    public function loadThanas(Request $request)
    {
        $districtId = $request->input('district_id');
        $divisions = Division::with('districts.thanas')->select('id', 'name')->get();
        $selectedDistrict = District::with('thanas')->where('id', $districtId)->first();

        return view('dropdowns.address', compact('divisions', 'selectedDistrict'));
    }
}
