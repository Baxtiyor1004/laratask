<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'family' => 'required|string',
            'phone' => 'required|string',
        ]);
        $data = $request->all();
        $member = MemberModel::query()->create($data);
        return response()->json([
            'success' => true,
            'error' => false,
            'data' => $member->id
        ]);
    }

    public function list()
    {

        $members = MemberModel::query()->get();
        return response()->json([
            'success' => true,
            'error' => false,
            'data' => $members
        ]);
    }
}
