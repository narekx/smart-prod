<?php

if (!function_exists('is_admin')) {
    function is_admin(): bool
    {
        return auth()->user()->role === \App\Enums\EnumUserRole::ADMIN->value;
    }
}
