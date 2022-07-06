<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function news(){
        return view('page.news');
    }
    public function announcement(){
        return view('page.announcement',[
            'announcements' => Announcement::All(),
            'dates' => Announcement::distinct('date')->pluck('date'),
        ]);
    }
}
