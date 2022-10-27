<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data = User::query()
                ->join('debts', 'users.id', '=', 'debts.to_id')
                ->where('debts.from_id', '=', Auth::id())
                ->where('debts.deleted_at', '=', null)
                ->get(['users.name','users.id as uid', 'debts.amount as amount', 'debts.description', 'debts.id as did']);

        return view('dashboard', compact('data'));
    }

    public function getList(Request $request)
    {
        $search = $request->search;

        if($search == ''){
           $users = User::orderBy('name', 'ASC')->where('id', '!=', Auth::id())->get(['id', 'name']);
        }else{
           $users = User::orderBy('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(10)->get();
        }

        $response = array();

        foreach($users as $employee){
           $response[] = array(
                "id"=>$employee->id,
                "text"=>$employee->name
           );
        }

        return response()->json($response);
    }


    public function history()
    {
        $data = User::query()
        ->join('debts', 'users.id', '=', 'debts.to_id')
        ->where('debts.from_id', '=', Auth::id())
        ->where('debts.deleted_at', '!=', null)
        ->select('users.name', 'debts.amount', 'debts.description', 'debts.deleted_at')
        ->paginate(7);

        return view('history', compact('data'));
    }

    public function debts()
    {
        $user = User::with(['hasDebts', 'allDebts'])->where('id', Auth::id())->first();
        $debts = Debt::with(['from'])->where('to_id', Auth::id())->get();
        return view('your-debts', compact('user', 'debts'));
    }

    public function leaderboard()
    {
        $users = User::query()
        ->join('debts', 'users.id', '=', 'debts.to_id')
        ->select('users.name', 'users.id', DB::raw('sum(debts.amount) as total'))
        ->groupBy('users.name', 'users.id')
        ->orderBy('total', 'desc')
        ->paginate(7);

        return view('leaderboard', compact('users'));
    }
}
