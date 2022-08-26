<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisasterCase;

class CaseController extends Controller {
    public function showAllCasesPage() {
        return view('pages.cases.general', ['activeSection' => 'all']);
    }

    public function showActiveCasesPage() {
        $cases = DisasterCase::where('status', '=', 'active')->orderByDesc('created_at')->get();
        return view('pages.cases.general', ['activeSection' => 'active', 'cases' => $cases]);
    }

    public function showClosedCasesPage() {
        $cases = DisasterCase::where('status', '=', 'closed')->orderByDesc('created_at')->get();
        return view('pages.cases.general', ['activeSection' => 'closed', 'cases' => $cases]);
    }

    public function showPendingCasesPage() {
        $cases = DisasterCase::where('status', '=', 'pending')->orderByDesc('created_at')->get();
        return view('pages.cases.general', ['activeSection' => 'pending', 'cases' => $cases]);
    }

    public function showCaseOverviewPage($signature) {
        $case = DisasterCase::whereSignature($signature)->first();
        return view('pages.cases.view.overview', ['case' => $case]);
    }

    public function showCaseTeamsPage($signature) {
        $case = DisasterCase::whereSignature($signature)->first();
        return view('pages.cases.view.teams', ['case' => $case]);
    }
}
