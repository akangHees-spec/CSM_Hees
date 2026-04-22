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
     * Store atau update company profile (upsert — cocok untuk single-record).
     * Fillable model: company_name, banner, title, tagline, description,
     *                 count, icon_title, icon_subtitle, order
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_name'  => ['required', 'string', 'max:255'],
            'banner'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'title'         => ['nullable', 'string', 'max:255'],
            'tagline'       => ['nullable', 'string', 'max:255'],
            'description'   => ['required', 'string'],
            'count'         => ['nullable', 'string', 'max:255'],
            'icon_title'    => ['nullable', 'string', 'max:255'],
            'icon_subtitle' => ['nullable', 'string', 'max:255'],
            'order'         => ['nullable', 'integer', 'min:0'],
        ]);

        // Tangani upload banner — pertahankan lama jika tidak ada file baru
        if ($request->hasFile('banner')) {
            $validated['banner'] = $request->file('banner')->store('company-profile', 'public');
        } else {
            unset($validated['banner']);
        }

        CompanyProfile::updateOrCreate([], $validated);

        return redirect()
            ->route('sigma.company-profile.index')
            ->with('success', 'Company profile berhasil diperbarui.');
    }
}