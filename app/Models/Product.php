<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Product es un modelo Eloquent ORM, un modelo Eloquent es un generador de consultas que nos permite consultar la tabla de la base de datos asociada a este modelo, los modelos Eloquent son constructores de consultas
class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; //tabla asociada con el modelo
    public $timestamps = true; //ponga una marca de tiempo automática cuando crea un registro

    //convertimos el tipo del campo price a float
    protected $casts = [
        'price' => 'float'
    ];

    //Se utiliza para evitar fallos de seguridad y es la forma en la que nos protege el ORM, de inyección SQL y demás.
    //Para evitar esto dentro del modelo agregamos la propiedad fillable y asignamos unarray con las columnas de la tabla que puedan ser cargadas de forma masiva.
    protected $fillable = [
        'name',
        'description',
        'price',
        'created_at'
    ];
}
