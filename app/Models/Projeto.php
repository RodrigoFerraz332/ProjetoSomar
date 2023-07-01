<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Projeto extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projetos';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idProjeto';
    public $timestamps = false;
}
