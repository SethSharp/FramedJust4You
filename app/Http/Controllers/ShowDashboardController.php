<?php

namespace App\Http\Controllers;

use App\Domain\Iam\Models\Role;
use Inertia\Inertia;

class ShowDashboardController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Management/Dashboard', [
            'roles' => Role::all()
        ]);
    }
}
