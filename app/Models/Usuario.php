<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idUsuario';

    /**
     * Get the phone associated with the user.
     */
    public function perfilDeAcesso()
    {
        return $this->belongsTo(PerfilDeAcesso::class, 'idPerfil_de_Acesso');
    }
}
