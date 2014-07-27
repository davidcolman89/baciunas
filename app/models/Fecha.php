<?php

class Fecha {

    static $fechaReturn;

    static function formatMssqlToDate($sFormat,$sFecha)
    {
        $sFecha = strtotime($sFecha);
        static::$fechaReturn = date($sFormat,$sFecha);
        return static::$fechaReturn;
    }

}