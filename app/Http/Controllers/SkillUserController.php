<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Skill;

class SkillUserController extends Controller
{
    public function create()
    {
        return view('skilluser.create', $this->preparationVariables(Auth::user()));
    }

    public function store(Request $req)
    {

    }

    public function proficiency()
    {

    }

    public function storeProficiency(Request $req)
    {

    }

    private function preparationVariables($user)
    {
        $skills = Skill::all();
        return [
            'skills' => $skills,
            'skillsGroupByType' => $skills->groupBy('typeName'),
            'skillsGroupByTypeForSelect' => $skills->skillsGroupByTypeForSelect(),
            'userskillids' => $user->skillIds(),
        ];
    }
}
