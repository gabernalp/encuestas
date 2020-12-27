<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class VetAnswer extends Model
{
    use SoftDeletes;

    public $table = 'vet_answers';

    const HEARD_ABOUT_PFI_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const PET_NUTRITION_QUESTION_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    const FOOD_RECOMENDATION_CONCENTRATES_RADIO = [
        'Si' => 'Si',
        'No' => 'No',
    ];

    const PERCENT_CALORIES_CONCENTRATES_RADIO = [
        '30'  => '30%',
        '50'  => '70%',
        '100' => '100%',
    ];

    const FOOD_TYPE_RECOMMENDATION_RADIO = [
        'Húmeda' => 'Húmeda',
        'Seca'   => 'Seca',
        'Mixta'  => 'Mixta',
    ];

    const PERCENT_APPLY_DIET_RADIO = [
        '30%'  => '30%',
        '50%'  => '50%',
        '70%'  => '70%',
        '100%' => '100%',
    ];

    const FRECUENCY_EDUCATION_RADIO = [
        'Una vez al año'   => 'Una vez al año',
        'Dos veces al año' => 'Dos veces al año',
        'Mensualmente'     => 'Mensualmente',
        'Nunca'            => 'Nunca',
    ];

    const IF_US_BEST_FOOD_RADIO = [
        'Purina'           => 'Purina',
        'Diamond Naturals' => 'Diamond Naturals',
        'Hills'            => 'Hills',
        'Pedigree'         => 'Pedigree',
        'Whiskas'          => 'Whiskas',
        'Royal Canin'      => 'Royal Canin',
        'Mars'             => 'Mars',
        'Otra marca'       => 'Otra marca',
    ];

    protected $fillable = [
        'name',
        'vet_clinic',
        'vet_university',
        'pet_shelters',
        'department_id',
        'city_id',
        'pet_nutrition_question',
        'recomendations_applied',
        'percent_apply_diet',
        'difficulty_change_food_owners',
        'obesity_5',
        'malnutrition_5',
        'allergies_5',
        'gastritis_5',
        'diarrhea_5',
        'periodontal_5',
        'other_disease_5',
        'other_5',
        'mix_food_6',
        'food_outtime',
        'water_not_enough',
        'quantities_control',
        'plate_higiene',
        'other_bad_habit',
        'other_6',
        'food_type_recommendation',
        'food_recomendation_concentrates',
        'percent_calories_concentrates',
        'country_best_food',
        'if_us_best_food',
        'other_11',
        'not_recommended_food',
        'frecuency_education',
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
