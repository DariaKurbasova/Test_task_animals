<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends BaseController {

    public function showAll() {
        return view('main_page', ['animals' => Animal::all()]);
    }
}