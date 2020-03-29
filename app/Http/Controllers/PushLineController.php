<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\LineNotify;
/**
 * Class PushLineController
 * @package App\Http\Controllers
 */
class PushLineController extends Controller
{
    use LineNotify;

    public function push(Request $request)
    {
        $this->pushLine($request->message);

        return 200;
    }
}
