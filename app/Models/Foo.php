<?php

namespace App\Models;

use App\Traits\HasHashId;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Foo.
 *
 * @property int|null $id
 * @property string|null $name
 *
 * @mixin Eloquent
 */
class Foo extends Model
{
    use HasHashId;
    use HasFactory;
}
