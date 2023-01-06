<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    public function index2(Sample $sample)
    {
        return $sample->get();
    }
}
