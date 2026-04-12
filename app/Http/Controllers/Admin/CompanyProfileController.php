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
        $profile = CompanyProfile::firstOrNew();

        return view('pages.admin.home.index', compact('profile'));
    }

    /**
     * Update the company profile.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'tagline'      => ['nullable', 'string', 'max:255'],
            'description'  => ['required', 'string'],
            'vision'       => ['nullable', 'string'],
            'mission'      => ['nullable', 'string'],
        ]);

        CompanyProfile::updateOrCreate([], $validated);

        return redirect()
            ->back()
            ->with('success', 'Company profile berhasil diperbarui.');
    }
}