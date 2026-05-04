<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman index home.
     */
    public function index(): View
    {
        $home = Home::first();

        return view('pages.admin.home.index', compact('home'));
    }

    /**
     * Tampilkan form edit home.
     */
    public function edit(): View
    {
        $home = Home::first();

        return view('pages.admin.home.edit', compact('home'));
    }

    /**
     * Simpan atau update data home (single-record upsert).
     * Fillable: name, headline, highlight, description, video, banner
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'headline'    => ['required', 'string', 'max:255'],
            'highlight'   => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'video'       => ['nullable', 'url', 'max:500'],
            'banner'      => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        // Upload banner baru jika ada, pertahankan lama jika tidak
        if ($request->hasFile('banner')) {
            $existing = Home::first();

            // Hapus banner lama dari storage
            if ($existing?->banner) {
                Storage::disk('public')->delete($existing->banner);
            }

            $validated['banner'] = $request->file('banner')->store('home/banner', 'public');
        } else {
            unset($validated['banner']);
        }

        Home::updateOrCreate([], $validated);

        return redirect()
            ->route('admino.home.index')
            ->with('success', 'Data hero berhasil diperbarui.');
    }
}