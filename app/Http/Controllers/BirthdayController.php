<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BirthdayController extends Controller
{
    public function index(Request $request)
{
    $query = "SELECT * FROM birthday_packages WHERE 1=1";
    $params = [];

    if ($request->has('party_type') && $request->party_type != '') {
        $query .= " AND party_type = ?";
        $params[] = $request->party_type;
    }

    if ($request->has('photography')) {
        $query .= " AND photography = 1";
    }

    if ($request->has('birthday_cake')) {
        $query .= " AND birthday_cake = 1";
    }

    if ($request->has('extra_decorations')) {
        $query .= " AND extra_decorations = 1";
    }

    $packages = DB::select($query, $params);

    return view('birthday.index', compact('packages'));
}

public function show($id)
{
    $package = DB::selectOne("SELECT * FROM birthday_packages WHERE id = ?", [$id]);

    if (!$package) {
        abort(404, 'Package not found');
    }

    return view('birthday.show', compact('package'));
}

}
