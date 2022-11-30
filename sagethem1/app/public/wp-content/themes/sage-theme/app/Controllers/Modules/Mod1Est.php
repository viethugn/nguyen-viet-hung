<?php

namespace App\Controllers\Modules;

class Mod1Est
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
