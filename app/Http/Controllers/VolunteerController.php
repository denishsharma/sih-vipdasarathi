<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VolunteerProfile;

class VolunteerController extends Controller
{
    public function showAllProfilesPage() {
        return view('pages.volunteer.profiles');
    }

    public function showVolunteerTokensPage() {
        return view('pages.volunteer.tokens');
    }

    public function showVolunteerAuditPage() {
        return view('pages.volunteer.audits');
    }

    public function showVolunteerOverviewPage($signature) {
        $volunteer =  VolunteerProfile::where('signature', $signature)->first();
        return view('pages.volunteer.view.overview', ['profile' => $volunteer]);
    }
}
