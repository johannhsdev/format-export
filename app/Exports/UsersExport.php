<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): view
    {
        //return User::all();
        $expusers = User::select('id', 'name', 'email', 'created_at')->get();

        return view('exports.users', [
            'users' => $expusers,
        ]);
    }
}
