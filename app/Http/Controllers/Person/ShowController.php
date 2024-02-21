<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use Illuminate\Http\Request;
use App\Models\Person;

class  ShowController extends Controller
{
    public function __invoke(Person $person)
    {

        return new PersonResource($person);
    }
}
