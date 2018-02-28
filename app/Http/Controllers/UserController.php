<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\UserBasicInfo;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = UserBasicInfo::getInstance()->getAll();
        return view('Marriage.list',
            [
                'records'=>$records
            ]);
    }
    public function create()
    {
        return view(
            "Marriage.create"
        );
    }
}
