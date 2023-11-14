<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Group;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
     return Member::with('Group')->get();
   }

   public function group()
   {
    return Group::with('Member')->get();
   }
}
