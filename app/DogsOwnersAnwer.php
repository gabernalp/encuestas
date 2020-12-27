<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class DogsOwnersAnwer extends Model
{
    use SoftDeletes;

    public $table = 'dogs_owners_anwers';

    const DOG_DIET_OWNER_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    const HEARD_ABOUT_PFI_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    const DOG_DIFF_NUTRITION_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const DOG_PERCENT_CONCENTRATE_RADIO = [
        '30%'  => '30%',
        '50%'  => '50%',
        '70%'  => '70%',
        '100%' => '100%',
    ];

    const DOG_FOOD_TYPE_RADIO = [
        'Concentrado'   => 'Concentrado',
        'Comida casera' => 'Comida casera',
        'Dieta mixta'   => 'Dieta mixta',
        'Barf'          => 'Barf',
    ];

    const DOG_APPEAR_RADIO = [
        'Amigo o familiar'    => 'Amigo o familiar',
        'Refugio o rescatado' => 'Refugio o rescatado',
        'Compra'              => 'Compra',
        'Otro'                => 'Otro',
    ];

    const DOG_FOOD_ADVICE_RADIO = [
        'Amigo'                     => 'Amigo',
        'Familiar'                  => 'Familiar',
        'Veterinario'               => 'Veterinario',
        'Internet y redes sociales' => 'Internet y redes sociales',
    ];

    const DOG_CONSIDERATION_RADIO = [
        'Una mascota'              => 'Una mascota',
        'Un miembro de la familia' => 'Un miembro de la familia',
        'Un compañero'             => 'Un compañero',
        'Otro'                     => 'Otro',
    ];

    const DOG_FOOD_CHOOSE_RADIO = [
        'Disponibilidad en el mercado' => 'Disponibilidad en el mercado',
        'Costo ($)'                    => 'Costo ($)',
        'Requisitos nutricionales'     => 'Requisitos nutricionales',
        'Otro'                         => 'Otro',
    ];

    protected $fillable = [
        'name',
        'email',
        'department_id',
        'city_id',
        'dog_appear',
        'other_1',
        'dog_consideration',
        'other_2',
        'dog_food_advice',
        'dog_food_choose',
        'other_4',
        'dog_diff_nutrition',
        'dog_diet_owner',
        'dog_food_type',
        'diamond_naturals_8',
        'purina_8',
        'hills_8',
        'pedigree_8',
        'royal_canin_8',
        'mars_8',
        'other_8',
        'dog_percent_concentrate',
        'dog_candies',
        'dog_change_food',
        'general_consultation_12',
        'dermatological_disease_12',
        'digestive_disease_12',
        'periodontal_disease_12',
        'neuro_problems_12',
        'metabolic_disease_12',
        'orthopedic_problems_12',
        'emergency_case_12',
        'other_12',
        'dog_actual_disease',
        'avoid_obesity_14',
        'read_food_tags_14',
        'healthy_snacks_14',
        'diets_switch_14',
        'food_by_grow_14',
        'food_by_physical_14',
        'more_info_14',
        'other_14',
        'heard_about_pfi',
        'ip',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function department()
    {
        return $this->belongsTo(Departamento::class, 'department_id');
    }

    public function city()
    {
        return $this->belongsTo(Ciudade::class, 'city_id');
    }
}
