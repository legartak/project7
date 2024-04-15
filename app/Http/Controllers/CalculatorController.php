<?php

namespace App\Http\Controllers;

class CalculatorController extends Controller
{
    // Make addition
    public function add(int $a, int $b)
    {
        return View('calculator', ['a' => $a, 'b' => $b]);
    }

    public function makeOperation(int $a, int $b, string $operation)
    {
        return View('calculator', ['a' => $a, 'b' => $b, 'operation' => $operation]);

    }
}
