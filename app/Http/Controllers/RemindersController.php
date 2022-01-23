<?php

namespace App\Http\Controllers;;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Foundation\Validation\ValidatesRequests;

class RemindersController extends BaseController
{

    public function index(){
        return view('reminders/index');
    }
}
