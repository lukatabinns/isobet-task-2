<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExchangeRateController extends Controller
{
    public function index(): View|Application
    {
        return view("index");
    }

    public function downLoadRate(): BinaryFileResponse
    {
        $exchangeRte = (array) exchangeRate();

        $fileName = "rates/exchange_rate.csv";

        $header = csvHeader();

        createExchangeRateFile($exchangeRte, $fileName);

        Redirect::back();

        return Response::download($fileName, "exchange_rate.csv", $header);
    }
}
