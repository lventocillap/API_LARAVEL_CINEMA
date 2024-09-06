<?php

namespace App;

enum RoomStatusesEnum: string
{
    case Libre = 'Libre';
    case Ocupado = 'Ocupado';
    case Mantenimiento = 'Mantenimiento';
    case Silla_Ruedas = 'Silla de ruedas';
}
