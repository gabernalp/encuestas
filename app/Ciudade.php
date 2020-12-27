<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Ciudade extends Model
{
    use SoftDeletes;

    public $table = 'ciudades';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'code',
        'departamento_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function municipioAgentesEducativos()
    {
        return $this->hasMany(AgentesEducativo::class, 'municipio_id', 'id');
    }

    public function cityCatsOwnersAnwers()
    {
        return $this->hasMany(CatsOwnersAnwer::class, 'city_id', 'id');
    }

    public function cityDogsOwnersAnwers()
    {
        return $this->hasMany(DogsOwnersAnwer::class, 'city_id', 'id');
    }

    public function cityVetAnswers()
    {
        return $this->hasMany(VetAnswer::class, 'city_id', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }
}
