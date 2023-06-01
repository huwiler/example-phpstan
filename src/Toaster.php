<?php

namespace App;

class Toaster
{
    public function toast(int $time = 1): string
    {
        if ($time > 3) {
            return "You burned me!;
        }

        return "Yay toast!";
    }
}