<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Kebijakan;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaturanWebAdminController extends Controller
{
    public function banner_index()
    {
        $banner = Banner::all();

        return view('pages.admin.pengaturan.banner.index', compact('banner'));
    }

    public function profile_index()
    {
        $profile = Profile::all();
        return view('pages.admin.pengaturan.profile.index', compact('profile'));
    }

    public function kebijakan_index()
    {
        $kebijakan = Kebijakan::all();
        return view('pages.admin.pengaturan.tata-cara-kebijakan.index', compact('kebijakan'));
    }

    // edit
    public function edit_profile($id)
    {
        $profile = Profile::where('id', $id)->first();
        return view('pages.admin.pengaturan.profile.update', compact('profile'));
    }

    public function edit_banner($id)
    {
        $banner = Banner::where('id', $id)->first();
        return view('pages.admin.pengaturan.banner.update', compact('banner'));
    }

    public function edit_kebijakan($id)
    {
        $kebijakan = Kebijakan::where('id', $id)->first();
        return view('pages.admin.pengaturan.tata-cara-kebijakan.update', compact('kebijakan'));
    }

    // update
    public function update_kebijakan(Request $request, $id)
    {
        $kebijakan = Kebijakan::where('id', $id)->first();
        if ($request->file('kebijakan')) {
            $file = $request->file('kebijakan')->store('kebijakan', 'public');
            if ($kebijakan->kebijakan && file_exists(storage_path('app/public/' . $kebijakan->kebijakan))) {
                Storage::delete('public/' . $kebijakan->kebijakan);
                $file = $request->file('kebijakan')->store('kebijakan', 'public');
            }
        }

        if ($request->file('kebijakan') === null) {
            $file = $kebijakan->kebijakan;
        }

        $kebijakan->update([
            "kebijakan" => $file
        ]);

        return redirect()->route('index-kebijakan');
    }

    public function update_profile(Request $request, $id)
    {
        $profile = Profile::where('id', $id)->first();
        if ($request->file('profile')) {
            $file = $request->file('profile')->store('profile', 'public');
            if ($profile->profile && file_exists(storage_path('app/public/' . $profile->profile))) {
                Storage::delete('public/' . $profile->profile);
                $file = $request->file('profile')->store('profile', 'public');
            }
        }

        if ($request->file('profile') === null) {
            $file = $profile->profile;
        }

        $profile->update([
            "profile" => $file
        ]);

        return redirect()->route('index-profile');
    }

    public function update_banner(Request $request, $id)
    {
        $banner = Banner::where('id', $id)->first();

        if ($request->file('banner')) {
            $file = $request->file('banner')->store('banner', 'public');
            if ($banner->banner && file_exists(storage_path('app/public/' . $banner->banner))) {
                Storage::delete('public/' . $banner->banner);
                $file = $request->file('banner')->store('banner', 'public');
            }
        }

        if ($request->file('banner') === null) {
            $file = $banner->banner;
        }

        $banner->update([
            "banner" => $file
        ]);

        return redirect()->route('index-banner');
    }
}
