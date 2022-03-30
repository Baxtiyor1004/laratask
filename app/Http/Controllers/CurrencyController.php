<?php

namespace App\Http\Controllers;

use App\Models\CurrencyModel;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function sync()
    {
        $url = "https://openexchangerates.org/api/currencies.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($result, true);
        foreach ($data as $key => $value) {
            CurrencyModel::query()->create(['keyword' => $key, 'title' => $value]);
        }

        $ans = CurrencyModel::query()->get();
        return response()->json([
            'success' => true,
            'error' => false,
            'data' => $ans
        ]);
    }
}
