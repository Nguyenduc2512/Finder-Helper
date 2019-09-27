<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CoinService;
use Illuminate\Support\Facades\Lang;

class CoinController extends Controller
{
    protected $coinService;
    public function __construct(CoinService $coinService)
    {
        $this->coinService = $coinService;
    }

    public function index()
    {
        $banks = $this->coinService->getAllBank();

        return view('client.formClient.add_coin', compact('banks'));
    }

    public function store(Request $request)
    {
        $this->coinService->addCoin($request);

        return redirect()->route('user.coin')
            ->with('success', Lang::get('messages.coinSuccess'));
    }

}
