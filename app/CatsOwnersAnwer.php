<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class CatsOwnersAnwer extends Model
{
    use SoftDeletes;

    public $table = 'cats_owners_anwers';

    const CAT_DIET_OWNER_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    const HEARD_ABOUT_PFI_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    const CAT_DIFF_NUTRITION_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const CAT_PERCENT_CONCENTRATE_RADIO = [
        '30%'  => '30%',
        '50%'  => '50%',
        '70%'  => '70%',
        '100%' => '100%',
    ];

    const CAT_FOOD_TYPE_RADIO = [
        'Concentrado'   => 'Concentrado',
        'Comida casera' => 'Comida casera',
        'Dieta mixta'   => 'Dieta mixta',
        'Barf'          => 'Barf',
    ];

    const CAT_APPEAR_RADIO = [
        'Amigo o familiar'    => 'Amigo o familiar',
        'Refugio o rescatado' => 'Refugio o rescatado',
        'Compra'              => 'Compra',
        'Otro'                => 'Otro',
    ];

    const CAT_FOOD_ADVICE_RADIO = [
        'Amigo'                     => 'Amigo',
        'Familiar'                  => 'Familiar',
        'Veterinario'               => 'Veterinario',
        'Internet y redes sociales' => 'Internet y redes sociales',
    ];

    const CAT_CONSIDERATION_RADIO = [
        'Una mascota'              => 'Una mascota',
        'Un miembro de la familia' => 'Un miembro de la familia',
        'Un compañero'             => 'Un compañero',
        'Otro'                     => 'Otro',
    ];

    const CAT_FOOD_CHOOSE_RADIO = [
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
        'cat_appear',
        'other_1',
        'cat_consideration',
        'other_2',
        'cat_food_advice',
        'cat_food_choose',
        'other_4',
        'cat_diff_nutrition',
        'cat_diet_owner',
        'cat_food_type',
        'diamond_naturals_8',
        'purina_8',
        'mars_8',
        'whiskas_8',
        'other_8',
        'cat_percent_concentrate',
        'cat_candies',
        'cat_change_food',
        'general_consultation_12',
        'dermatological_disease_12',
        'digestive_disease_12',
        'periodontal_disease_12',
        'neuro_problems_12',
        'metabolic_disease_12',
        'orthopedic_problems_12',
        'emergency_case_12',
        'other_12',
        'cat_actual_disease',
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
