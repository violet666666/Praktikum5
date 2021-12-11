<?php

namespace App\Controllers;

use App\Models\devicesdetailModel;

class DevicesDetailController extends BaseController
{
    public function index()
    {

        $devicesdetailModel = new devicesdetailModel();
        $devices_detail = $devicesdetailModel->findAll();

        $data = [
            'devices_detail' => $devices_detail
        ];

        return view('Pages_DevicesDetail', $data);
    }
}
