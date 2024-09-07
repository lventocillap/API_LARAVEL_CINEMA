<?php

namespace App;

enum MovieStatusesEnum:string
{
    case Cartelera = 'Cartelera';
    case Proximamente = 'Proximamente';
    case Relanzamiento = 'Relanzamiento';
}
