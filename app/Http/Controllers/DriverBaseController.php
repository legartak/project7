<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DriverBaseController extends Controller
{
    public function getInfoAboutDriver(int $id, bool $fullMode)
    {
        return View('driver-base', ['id' => $id, 'fullMode' => $fullMode]);
    }
}
