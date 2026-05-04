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
        $profile = CompanyProfile::first();

        return view('pages.admin.home.index', compact('profile'));
    }

    /**
     * Show form edit company profile.
     */
    public function edit(): View
    {
        $profile = CompanyProfile::first();

        return view('pages.admin.home.edit', compact('profile'));
    }

    /**
     * Store atau update company profile (upsert — single-record).
     * Fillable: company_name, tagline, description, vision, mision
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'tagline'      => ['nullable', 'string', 'max:255'],
            'description'  => ['required', 'string'],
            'vision'       => ['nullable', 'string'],
            'mision'       => ['nullable', 'string'],
        ]);

        CompanyProfile::updateOrCreate([], $validated);

        return redirect()
            ->route('admin.company-profile.index')
            ->with('success', 'Company profile berhasil diperbarui.');
    }
}