<?php

namespace App\Http\Controllers;

use App\Http\Requests\Device\DeviceRequest;
use App\Http\Requests\Device\UpdateRequest;
use App\Http\Resources\Device\DeviceResource;
use App\Models\Device;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        $devices = DeviceResource::collection($devices)->resolve();
        return Inertia::render('Device/Index', compact('devices'));
    }

    public function show(Device $device)
    {
        return inertia('Device/Show', compact('device'));
    }

    public function create()
    {
        return Inertia::render('Device/Create');
    }

    public function store(DeviceRequest $request)
    {
        Device::create($request->validated());
        return redirect()->route('device.index');
    }

    public function edit(Device $device)
    {
        return inertia('Device/Edit', compact('device'));
    }

    public function update(UpdateRequest $request, Device $device)
    {
        $device->update($request->validated());
        return redirect()->route('device.index');
    }

    public function delete(Device $device)
    {
        $device->delete();
        return redirect()->route('device.index');
    }


}
