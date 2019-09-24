<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    const ROLE_ADMIN = 1;
    const ROLE_TECNICO = 2;
    const ROLE_CLIENTE = 3;
}
