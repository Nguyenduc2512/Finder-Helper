<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Http\Controllers\Controller;
use App\Services\CoinService;
use App\Models\Coin;
use App\Models\User;
use App\Models\Ratio;

class CoinController extends Controller
{
    protected $coinService;
    public function __construct(CoinService $coinService)
    {
        $this->coinService = $coinService;
    }

    public function index()
    {
        $coin = $this->coinService->getAllCoin();
        $ratio = $this->coinService->getRation();

        return view('admin.coin.list_coin', compact('coin', 'ratio'));
    }

    public function edit(Coin $coin)
    {
        $ratio = $this->coinService->show($coin);

        return view('admin.coin.edit_coin', ['coin' => $coin, 'ratio' => $ratio]);
    }

    public function update(Request $request)
    {
        $this->coinService->update($request);

        return redirect()->route('coins.index')
            ->with('success', Lang::get('messages.success'));
    }

    public function store(Request $request)
    {
        $this->coinService->store($request);

        return redirect()->route('coins.index')
            ->with('success', Lang::get('messages.success'));
    }

}
