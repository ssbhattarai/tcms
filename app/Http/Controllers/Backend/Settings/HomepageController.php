<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $logo = Asset::where('type', 'logo')->take(1)->get();
        $menu = Asset::where('type', 'menu_image')->take(1)->get();
        $menu_file = Asset::where('type', 'menu_file')->take(1)->get();

        return view('admin_pages.settings.homepage', [
            'sliders' => $sliders,
            'logo' => $logo,
            'menu' => $menu,
            'menu_file' => $menu_file,
        ]);
    }

    public function getLogo(Request $request)
    {

        $logo = Asset::take(1)->where('type', 'logo')->get();
        return json_encode($logo);

    }

    public function uploadLogo(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required',
        ]);

        $i = Storage::disk('public')->put('logo', $request->image[0]);

        $store = new Asset();
        $store->type = 'logo';
        $store->name = $i;
        $store->save();
        if ($store) {
            return redirect()->back()->with('success', 'Logo Uploaded Successfully !!');
        } else {
            return redirect()->back()->with('error', 'Failed to Upload !!');
        }

    }

    public function updateLogo(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required',
            'id' => 'required',
        ]);

        $i = Storage::disk('public')->put('logo', $request->image[0]);
        Storage::delete('/public/' . $request->prev_image);

        $store = Asset::find($request->id);
        $store->name = $i;
        $store->update();
        if ($store) {
            return redirect()->back()->with('success', 'Logo Updated Successfully !!');
        } else {
            return redirect()->back()->with('error', 'Failed to Upload !!');
        }

    }

    public function uploadMenu(Request $request)
    {
        // dd($request->image);

        $image = Asset::where('type', 'menu_image')->first();
        $file = Asset::where('type', 'menu_file')->first();

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('menu', $request->image);
            if ($image == null) {
                $store = new Asset();
                $store->type = 'menu_image';
                $store->name = $i;
                $store->save();
            } else {
                $store = Asset::find($image->id);
                $store->name = $i;
                $store->update();
            }
        }

        if ($request->hasfile('file')) {
            $f = Storage::disk('public')->put('menu', $request->file);
            if ($file == null) {
                $store = new Asset();
                $store->type = 'menu_file';
                $store->name = $f;
                $store->save();
            } else {
                $store = Asset::find($file->id);
                $store->name = $f;
                $store->update();
            }

        }

        if ($store) {
            return redirect()->back()->with('success', 'Menu Uploaded Successfully !!');
        } else {
            return redirect()->back()->with('error', 'Failed to Upload !!');
        }

    }

}