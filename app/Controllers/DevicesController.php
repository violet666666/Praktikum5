<?php

namespace App\Controllers;

use App\Models\devicesModel;

class DevicesController extends BaseController
{
    public function index()
    {
        $devicesModel = new devicesModel();
        $devices = $devicesModel->findAll();

        $data = [
            'devices' => $devices
        ];



        return view('Pages_Device', $data);
    }
}
