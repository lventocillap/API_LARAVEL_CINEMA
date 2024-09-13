<?php

namespace App;

enum MovieStatusesEnum:string
{
    case Cartelera = 'Estreno';
    case Proximamente = 'Proximamente';
    case Relanzamiento = 'Relanzamiento';
}
