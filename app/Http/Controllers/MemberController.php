<?php
namespace App\Http\Controllers;
use App\Member;

class MemberController extends Controller{
    public function info()
    {
        return Member::getMember();
       // return 'member-info';
        //return view('member-info');
    }
}