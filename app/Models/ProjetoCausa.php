<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetoCausa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projeto_causa';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = null;

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = ['idProjeto', 'idcausa_de_atuacao'];
}
