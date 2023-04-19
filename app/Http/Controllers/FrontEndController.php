<?php
namespace app\Http\Controllers;
 
use Illuminate\Http\Request;
class FrontEndController extends Controller
{
    public function homePage()
    {
    return view('welcome');
    }
}
?>