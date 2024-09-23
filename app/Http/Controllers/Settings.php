<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class Settings extends Controller
{
    public function index(GeneralSettings $settings): View
    {
        return view('panel.settings', ['data' => $settings]);
    }

    public function update(Request $request, GeneralSettings $settings): RedirectResponse
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'about' => 'required|string',
                'email' => 'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'address' => 'required',
                'string',
                'phone' => 'required',
                'string',
                'max:13',
                'logo' => 'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048',
            ]);

            if ($request->hasFile('logo')) {
                if ($settings->logo) {
                    Storage::disk('public')->delete('logos/', $settings->logo);
                }

                $file = $request->file('logo');

                $fileName = $file->hashName();

                $stored = $file->storeAs('logos', $fileName, 'public');

                if (! $stored) {
                    return redirect()->back()->withErrors('errorr', 'Gagal menyimpan file!');
                }

                $settings->logo = $fileName;
            }

            $settings->name = $request->name;
            $settings->about = $request->about;
            $settings->email = $request->email;
            $settings->address = $request->address;
            $settings->phone = $request->phone;

            $settings->save();

            return redirect()->route('setting.create')->with('success', 'Setting App berhasil diperbarui!');
        } catch (\Exception $e) {
            \Log::info('error : ' . $e->getMessage());

            // \Log::info('info : ' . $request->all());
            return redirect()->back()->withErrors(['error', 'Setting App gagal diperbarui.' . $e->getMessage()]);
        }
    }
}