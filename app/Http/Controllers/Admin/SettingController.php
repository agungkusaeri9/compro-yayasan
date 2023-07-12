<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.pages.setting.index', [
            'setting' => $setting,
            'title' => 'Setting Web'
        ]);
    }

    public function update()
    {
        request()->validate([
            'site_name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'author' => ['required'],
            'visi_misi' => ['required'],
            'description' => ['required'],
            // 'favicon' => ['mimes:jpg,png,jpeg', 'max:2048'],
            // 'image' => ['mimes:jpg,png,jpeg', 'max:2048'],
        ]);

        $data = request()->only(['site_name', 'email', 'phone', 'address', 'author', 'visi_misi', 'description']);

        $setting = Setting::first();

        if ($setting) {
            // update
            if (request()->file('favicon')) {
                $setting->favicon ? Storage::disk('public')->delete($setting->favicon) : '';
                $data['favicon'] = request()->file('favicon')->store('setting', 'public');
            }

            if (request()->file('image')) {
                $setting->image ? Storage::disk('public')->delete($setting->image) : '';
                $data['image'] = request()->file('image')->store('setting', 'public');
            }

            $setting->update($data);
            return redirect()->back()->with('success', 'Setting berhasi disimpan.');
        } else {
            // update
            if (request()->file('favicon')) {
                $data['favicon'] = request()->file('favicon')->store('setting', 'public');
            }

            if (request()->file('image')) {
                $data['image'] = request()->file('image')->store('setting', 'public');
            }

            Setting::create($data);
            return redirect()->back()->with('success', 'Setting berhasi disimpan.');
        }
    }
}
