<?php

namespace App\Services;
use App\Models\Bank;
use App\Models\Ratio;
use Illuminate\Http\Request;
use App\Models\Coin;
use App\Models\User;

class CoinService{
    public function getAllCoin()
    {
        $coin = Coin::all();
        $coin = $coin->load('banks');

        return $coin;
    }

    public function getAllBank()
    {
        $banks = Bank::all();

        return $banks;
    }
    public function getRation()
    {
        $ratio = Ratio::all();

        return $ratio;
    }

    public function addCoin(Request $request)
    {
        $data = $request->except('_token');
        $coin = Coin::create($data);
    }

    public function show(Coin $coin)
    {
        $coin = Coin::find($coin->id);
        $coin = $coin->load('user');
        $coin = $coin->load('ratio');

        $a = $coin->ratio['money'];
        $b = $coin->ratio['coin'];
        $c = $coin->money;

        $ratio = ($c*$b)/$a;

        return $ratio;
    }

    public function update(Request $request)
    {
        $coin = Coin::find($request->id);
        $dataCoin = [
            'status' => $request->status,
        ];
        $coin->update($dataCoin);

        $user = User::find($request->user_id);
        $dataUser = [
            'coin' => $user->coin + $request->coin,
        ];
        $user->update($dataUser);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'id');
        $ratio = Ratio::find($request->id);
        $ratio->update($data);

        return $ratio;
    }
}
