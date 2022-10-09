<?php

namespace App\Http\Controllers\Page\Setting;

use App\Http\Controllers\Controller;
use App\Services\Page\Setting\ProfileService;
use App\Http\Requests\Page\Setting\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * Locate blade file
     *
     * @return string
     */
    private static $path = 'pages.setting.profile';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProfileService $service)
    {
        return view(static::$path, $service->index(static::$path));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, ProfileService $service, $id)
    {
        if ($request->validated()) {
            $service->update($request, $id);
    
            return redirect(route("profile.index"));
        } else {
            return back();
        }
    }
}