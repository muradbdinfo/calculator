<?php


namespace App\Http\Controllers;
namespace murad\calculator; // newly add by murad

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // newly add by murad

class CalculatorController extends Controller
{
    public function add($a, $b){
    	echo $a + $b;
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }

    public function register()
{
    // register our controller
    $this->app->make('murad\calculator\CalculatorController');
}

}
