<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class AgentesEducativo extends Model
{
    use SoftDeletes;

    public $table = 'agentes_educativos';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const INSTITUCION_SELECT = [
        'ICBF' => 'ICBF',
        'MEN'  => 'MEN',
        'Otra' => 'Otra',
    ];

    const CONECTIVIDAD_SELECT = [
        'Mínimo' => 'Mínimo',
        'Bajo'   => 'Bajo',
        'Medio'  => 'Medio',
        'Alto'   => 'Alto',
    ];

    const ROL_SELECT = [
        'Padre-Madre comunitaria' => 'Padre-Madre comunitaria',
        'Agente educativo'        => 'Agente educativo',
        'Docente de preescolar'   => 'Docente de preescolar',
    ];

    const MODALIDAD_SELECT = [
        'Institucional' => 'Institucional',
        'Familiar'      => 'Familiar',
        'Comunitaria'   => 'Comunitaria',
        'Propia'        => 'Propia',
        'Intercultural' => 'Intercultural',
    ];

    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'departamento_id',
        'municipio_id',
        'telefono_celular',
        'institucion',
        'rol',
        'modalidad',
        'conectividad',
        'terminos',
        'privacidad',
        'ip',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function municipio()
    {
        return $this->belongsTo(Ciudade::class, 'municipio_id');
    }
}
