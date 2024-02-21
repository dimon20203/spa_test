<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class DeleteController extends Controller
{
    public function __invoke(Person $person)
    {

        $person->delete();
        return response([]);
    }
}
