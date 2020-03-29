<?php

namespace App\Service;

use Exception;
use KS\Line\LineNotify as Line;

trait LineNotify
{
    /**
     * @param \Exception $exception
     */
    public function pushLine($text = "")
    {
        $line = new Line(env('LINE_NOTIFY_TOKEN'));
        $message = $text . "\r\n";
        $sticker = ['stickerPackageId' => '1', 'stickerId' => '401'];
        $line->send($message,null,$sticker);
    }
}
