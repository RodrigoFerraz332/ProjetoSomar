<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Ods extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'odss';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idODS';
    public $timestamps = false;
}
