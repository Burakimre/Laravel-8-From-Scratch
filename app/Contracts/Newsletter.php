<?php

namespace App\Contracts;

interface Newsletter
{
    public function subscribe(string $email, string $list = null);
}
