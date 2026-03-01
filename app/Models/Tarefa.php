<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = 'tarefa';

    public $fillable = ['id', 'tituloTarefa', 'descTarefa', 'prazo', 'prioridade', 'status', 'user_id', 'created_at', 'updated_at'];

    //public timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
