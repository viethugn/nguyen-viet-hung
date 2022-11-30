<?php

namespace App\Controllers\Modules;

class ModduleBt1
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
