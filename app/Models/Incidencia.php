<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $attributes = [
        'asignado_id' => null,
        // 'asigna_id' => null,
        'estatu_id' => 1,
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // para url amigables

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }


    // Relaciones uno a muchos inversa
    public function user() //usuario que crea la incidencia
    {
        return $this->belongsTo(User::class,'user_id','idusuario');
        // return $this->belongsTo(Usuario::class);
    }

    public function asignado() //usuario que asigna la incidencia
    {
        return $this->belongsTo(User::class, 'asignado_id', 'idusuario');
        // return $this->belongsTo(Usuario::class);
    }

    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
    
    public function estatu(){
        return $this->belongsTo(Estatu::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    

    // Relaciones uno a muchos inversa
    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }


    // Relaciones uno a uno polimórfica
    // public function image()
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

}
