<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use Illuminate\Http\Request;
use App\Models\Person;

class ListController extends Controller
{
    public function __invoke()
    {
        $people = Person::all();
        return PersonResource::collection($people);
    }
}
