<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyProfileController extends Controller
{
    /**
     * Display the company profile page.
     */
    public function index(): View
    {
        $companyProfile = CompanyProfile::firstOrNew([]);

        return view('pages.admin.about.index', compact('companyProfile'));
    }

    /**
     * Show form edit company profile.
     */
    public function edit(): View
    {
        $companyProfile = CompanyProfile::firstOrNew([]);

        return view('pages.admin.about.edit', compact('companyProfile'));
    }

    /**
     * Store atau update company profile (upsert — single-record).
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'tagline'      => ['nullable', 'string', 'max:255'],
            'description'  => ['required', 'string', 'max:10000'],
            'vision'       => ['nullable', 'string', 'max:1000'],
            'mision'       => ['nullable', 'string', 'max:10000'],
        ]);

        CompanyProfile::updateOrCreate([], $validated);

        return redirect()
            ->route('admino.about.index')
            ->with('success', 'Company profile berhasil diperbarui.');
    }
}