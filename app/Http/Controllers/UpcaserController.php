<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UpcaserController extends Controller {
    public function proceed(Request $request) {
        $person = [
            'name' => $request['first_name'],
            'surname' => $request['last_name']
        ];
        return View('upcaser-result', ["object" => $person]);
    }
}
