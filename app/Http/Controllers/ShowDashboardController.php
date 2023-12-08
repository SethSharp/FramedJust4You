<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Domain\Iam\Models\Role;

class ShowDashboardController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Management/Dashboard', [
            'roles' => Role::all()
        ]);
    }
}
