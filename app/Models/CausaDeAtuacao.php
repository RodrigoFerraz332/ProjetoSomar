<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CausaDeAtuacao extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'causa_de_atuacao';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idcausa_de_atuacao';
    public $timestamps = false;
}
