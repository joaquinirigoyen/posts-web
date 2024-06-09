<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';   /* Sirve para aclarar q esta clase va a trabajar con la tabla post */
  protected $primaryKey = 'idpost';
    use HasFactory;

    protected function title(): Attribute
    {
      return Attribute::make( 
      set: function ($value){ /** Controla como se está almacenando el campo title, en este caso lo almacena en minusculas (mutador)*/
            return strtolower($value);
          },
          get: function($value){ /**Controla que cuando se realiza una consulta, la primera letra del campo sea en mayusculas (accesor)*/
            return ucfirst($value);
          }

        );
    }
    protected function casts(): array{
      return [
        'habilitated'=>'boolean',
        'created_at'=>'datetime',
        'update_at'=>'datetime'
      ];
    }

    public function users(){
      return $this->belongsTo(User::class);
    }
}
