<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class GetJetIframeController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function __invoke(): Application|View|Factory
    {
        $jetId = config('paycomet.jetId');
        return view('jet-iframe', [
            'jetId' => $jetId
        ]);
    }
}
