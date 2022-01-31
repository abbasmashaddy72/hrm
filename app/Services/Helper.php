<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class Helper
{

    public static function getEnum($table_name, $colum_name)
    {
        $values = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table_name . ' WHERE Field = "' . $colum_name . '"'));

        preg_match('/^enum\((.*)\)$/', $values[0]->Type, $matches);
        foreach (explode(',', $matches[1]) as $value) {
            $enum[trim($value, "'")] = trim($value, "'");
        }

        return $enum;
    }
}
