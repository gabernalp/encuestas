<?php

return [
    'userManagement'   => [
        'title'          => 'Ajustes',
        'title_singular' => 'Ajustes',
    ],
    'permission'       => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'             => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'             => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'auditLog'         => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'encuestum'        => [
        'title'          => 'Encuestas',
        'title_singular' => 'Encuesta',
    ],
    'agentesEducativo' => [
        'title'          => 'Agentes Educativos',
        'title_singular' => 'Agentes Educativo',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'nombre'                  => 'Nombre',
            'nombre_helper'           => ' ',
            'apellido'                => 'Apellido',
            'apellido_helper'         => ' ',
            'documento'               => 'Número de documento',
            'documento_helper'        => 'Sólo números, sin puntos ni comas ni espacios',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'departamento'            => 'Departamento',
            'departamento_helper'     => ' ',
            'municipio'               => 'Municipio',
            'municipio_helper'        => ' ',
            'telefono_celular'        => 'Telefono Celular',
            'telefono_celular_helper' => ' ',
            'institucion'             => 'Institución',
            'institucion_helper'      => ' ',
            'rol'                     => 'Rol de su labor',
            'rol_helper'              => ' ',
            'modalidad'               => 'Modalidad (si aplica)',
            'modalidad_helper'        => ' ',
            'conectividad'            => 'conectividad',
            'conectividad_helper'     => ' ',
            'terminos'                => 'terminos',
            'terminos_helper'         => ' ',
            'privacidad'              => 'privacidad',
            'privacidad_helper'       => ' ',
            'ip'                      => 'Ip',
            'ip_helper'               => ' ',
        ],
    ],
    'departamento'     => [
        'title'          => 'Departamentos',
        'title_singular' => 'Departamento',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => ' ',
            'code'              => 'Código',
            'code_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'ciudade'          => [
        'title'          => 'Ciudades',
        'title_singular' => 'Ciudade',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Nombre',
            'name_helper'         => ' ',
            'code'                => 'Código',
            'code_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'departamento'        => 'Departamento',
            'departamento_helper' => ' ',
        ],
    ],
    'catsOwnersAnwer'  => [
        'title'          => 'Respuestas tenedores felinos',
        'title_singular' => 'Respuestas tenedores felino',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => ' ',
            'name'                             => 'Nombre',
            'name_helper'                      => ' ',
            'email'                            => 'Email',
            'email_helper'                     => ' ',
            'department'                       => 'Departamento',
            'department_helper'                => ' ',
            'city'                             => 'Ciudad',
            'city_helper'                      => ' ',
            'cat_appear'                       => '¿Cómo llegó su gato a su vida?',
            'cat_appear_helper'                => ' ',
            'other_1'                          => 'Otro',
            'other_1_helper'                   => ' ',
            'cat_consideration'                => '¿Cómo considera a su gato dentro del hogar?',
            'cat_consideration_helper'         => ' ',
            'other_2'                          => 'Otro',
            'other_2_helper'                   => ' ',
            'cat_food_advice'                  => '¿A quién acude para pedir orientación sobre el alimento adecuado que debe proporcionarle a su gato?',
            'cat_food_advice_helper'           => ' ',
            'cat_food_choose'                  => '¿En qué factor se basa para elegir el alimento ideal para su gato?',
            'cat_food_choose_helper'           => ' ',
            'other_4'                          => 'Otro',
            'other_4_helper'                   => ' ',
            'cat_diff_nutrition'               => '¿Sabe que los requisitos nutricionales de perros y gatos son diferentes a los de los humanos?',
            'cat_diff_nutrition_helper'        => ' ',
            'cat_diet_owner'                   => '¿Cree que está alimentando a su mascota con una dieta equilibrada, con todos los nutrientes y minerales que necesita?',
            'cat_diet_owner_helper'            => ' ',
            'cat_food_type'                    => '¿Qué tipo de alimento le brinda a su gato?',
            'cat_food_type_helper'             => ' ',
            'diamond_naturals_8'               => 'Diamond Naturals 8',
            'diamond_naturals_8_helper'        => ' ',
            'purina_8'                         => 'Purina',
            'purina_8_helper'                  => ' ',
            'mars_8'                           => 'Mars 8',
            'mars_8_helper'                    => ' ',
            'whiskas_8'                        => 'Whiskas 8',
            'whiskas_8_helper'                 => ' ',
            'other_8'                          => 'Otra marca',
            'other_8_helper'                   => ' ',
            'cat_percent_concentrate'          => 'Del porcentaje de comida que recibe su gato diariamente, ¿cuánto corresponde al concentrado?',
            'cat_percent_concentrate_helper'   => ' ',
            'cat_candies'                      => '¿Le da golosinas a su mascota? Si es así, ¿qué tipo de golosina le da?',
            'cat_candies_helper'               => ' ',
            'cat_change_food'                  => '¿Qué tan fácil sería para usted cambiar el alimento de su gato?',
            'cat_change_food_helper'           => ' ',
            'general_consultation_12'          => 'Consulta General',
            'general_consultation_12_helper'   => ' ',
            'dermatological_disease_12'        => 'Enfermedad dermatológica',
            'dermatological_disease_12_helper' => ' ',
            'digestive_disease_12'             => 'Problemas digestivos y/o renales',
            'digestive_disease_12_helper'      => ' ',
            'periodontal_disease_12'           => 'Enfermedad periodontal',
            'periodontal_disease_12_helper'    => ' ',
            'neuro_problems_12'                => 'Problemas neurológicos',
            'neuro_problems_12_helper'         => ' ',
            'metabolic_disease_12'             => 'Enfermedad metabólica',
            'metabolic_disease_12_helper'      => ' ',
            'orthopedic_problems_12'           => 'Problemas ortopédicos',
            'orthopedic_problems_12_helper'    => ' ',
            'emergency_case_12'                => 'En caso de emergencia',
            'emergency_case_12_helper'         => ' ',
            'other_12'                         => 'Otro',
            'other_12_helper'                  => ' ',
            'cat_actual_disease'               => '¿Su gato tiene actualmente alguna condición médica que esté tratando o que no haya iniciado tratamiento? ¿Cuál?',
            'cat_actual_disease_helper'        => ' ',
            'avoid_obesity_14'                 => 'Cómo evitar la obesidad',
            'avoid_obesity_14_helper'          => ' ',
            'read_food_tags_14'                => 'Cómo leer la etiqueta de los alimentos',
            'read_food_tags_14_helper'         => ' ',
            'healthy_snacks_14'                => 'Snacks saludables',
            'healthy_snacks_14_helper'         => ' ',
            'diets_switch_14'                  => 'Cambios de dietas',
            'diets_switch_14_helper'           => ' ',
            'food_by_grow_14'                  => 'Alimentos según su etapa de crecimiento',
            'food_by_grow_14_helper'           => ' ',
            'food_by_physical_14'              => 'Alimentos según su condición física',
            'food_by_physical_14_helper'       => ' ',
            'more_info_14'                     => 'Otra información',
            'more_info_14_helper'              => ' ',
            'other_14'                         => '¿Cuál otro tema de información?',
            'other_14_helper'                  => ' ',
            'heard_about_pfi'                  => '¿Ha escuchado de Pet Food Institute?',
            'heard_about_pfi_helper'           => ' ',
            'ip'                               => 'Ip',
            'ip_helper'                        => ' ',
            'created_at'                       => 'Created at',
            'created_at_helper'                => ' ',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => ' ',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => ' ',
        ],
    ],
    'dogsOwnersAnwer'  => [
        'title'          => 'Respuestas tenedores caninos',
        'title_singular' => 'Respuestas tenedores canino',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => ' ',
            'name'                             => 'Nombre',
            'name_helper'                      => ' ',
            'email'                            => 'Email',
            'email_helper'                     => ' ',
            'department'                       => 'Departamento',
            'department_helper'                => ' ',
            'city'                             => 'Ciudad',
            'city_helper'                      => ' ',
            'dog_appear'                       => '¿Cómo llegó su perro a su vida?',
            'dog_appear_helper'                => ' ',
            'other_1'                          => 'Otro',
            'other_1_helper'                   => ' ',
            'dog_consideration'                => '¿Cómo considera a su perro dentro del hogar?',
            'dog_consideration_helper'         => ' ',
            'other_2'                          => 'Otro',
            'other_2_helper'                   => ' ',
            'dog_food_advice'                  => '¿A quién acude para pedir orientación sobre el alimento adecuado que debe proporcionarle a su perro?',
            'dog_food_advice_helper'           => ' ',
            'dog_food_choose'                  => '¿En qué factor se basa para elegir el alimento ideal para su perro?',
            'dog_food_choose_helper'           => ' ',
            'other_4'                          => 'Otro',
            'other_4_helper'                   => ' ',
            'dog_diff_nutrition'               => '¿Sabe que los requisitos nutricionales de perros y gatos son diferentes a los de los humanos?',
            'dog_diff_nutrition_helper'        => ' ',
            'dog_diet_owner'                   => '¿Cree que está alimentando a su mascota con una dieta equilibrada, con todos los nutrientes y minerales que necesita?',
            'dog_diet_owner_helper'            => ' ',
            'dog_food_type'                    => '¿Qué tipo de alimento le brinda a su perro?',
            'dog_food_type_helper'             => ' ',
            'diamond_naturals_8'               => 'Diamond Naturals 8',
            'diamond_naturals_8_helper'        => ' ',
            'purina_8'                         => 'Purina',
            'purina_8_helper'                  => ' ',
            'hills_8'                          => 'Hills',
            'hills_8_helper'                   => ' ',
            'pedigree_8'                       => 'Pedigree',
            'pedigree_8_helper'                => ' ',
            'royal_canin_8'                    => 'Royal Canin',
            'royal_canin_8_helper'             => ' ',
            'mars_8'                           => 'Mars',
            'mars_8_helper'                    => ' ',
            'other_8'                          => 'Otra marca',
            'other_8_helper'                   => ' ',
            'dog_percent_concentrate'          => 'Del porcentaje de comida que recibe su perro diariamente, ¿cuánto corresponde al concentrado?',
            'dog_percent_concentrate_helper'   => ' ',
            'dog_candies'                      => '¿Le da golosinas a su mascota? Si es así, ¿qué tipo de golosina le da?',
            'dog_candies_helper'               => ' ',
            'dog_change_food'                  => '¿Qué tan fácil sería para usted cambiar el alimento de su perro?',
            'dog_change_food_helper'           => ' ',
            'general_consultation_12'          => 'Consulta General',
            'general_consultation_12_helper'   => ' ',
            'dermatological_disease_12'        => 'Enfermedad dermatológica',
            'dermatological_disease_12_helper' => ' ',
            'digestive_disease_12'             => 'Problemas digestivos y/o renales',
            'digestive_disease_12_helper'      => ' ',
            'periodontal_disease_12'           => 'Enfermedad periodontal',
            'periodontal_disease_12_helper'    => ' ',
            'neuro_problems_12'                => 'Problemas neurológicos',
            'neuro_problems_12_helper'         => ' ',
            'metabolic_disease_12'             => 'Enfermedad metabólica',
            'metabolic_disease_12_helper'      => ' ',
            'orthopedic_problems_12'           => 'Problemas ortopédicos',
            'orthopedic_problems_12_helper'    => ' ',
            'emergency_case_12'                => 'En caso de emergencia',
            'emergency_case_12_helper'         => ' ',
            'other_12'                         => 'Otro',
            'other_12_helper'                  => ' ',
            'dog_actual_disease'               => '¿Su perro tiene actualmente alguna condición médica que esté tratando o que no haya iniciado tratamiento? ¿Cuál?',
            'dog_actual_disease_helper'        => ' ',
            'avoid_obesity_14'                 => 'Cómo evitar la obesidad',
            'avoid_obesity_14_helper'          => ' ',
            'read_food_tags_14'                => 'Cómo leer la etiqueta de los alimentos',
            'read_food_tags_14_helper'         => ' ',
            'healthy_snacks_14'                => 'Snacks saludables',
            'healthy_snacks_14_helper'         => ' ',
            'diets_switch_14'                  => 'Cambios de dietas',
            'diets_switch_14_helper'           => ' ',
            'food_by_grow_14'                  => 'Alimentos según su etapa de crecimiento',
            'food_by_grow_14_helper'           => ' ',
            'food_by_physical_14'              => 'Alimentos según su condición física',
            'food_by_physical_14_helper'       => ' ',
            'more_info_14'                     => 'Otra información',
            'more_info_14_helper'              => ' ',
            'other_14'                         => '¿Cuál otro tema de información?',
            'other_14_helper'                  => ' ',
            'heard_about_pfi'                  => '¿Ha escuchado de Pet Food Institute?',
            'heard_about_pfi_helper'           => ' ',
            'ip'                               => 'Ip',
            'ip_helper'                        => ' ',
            'created_at'                       => 'Created at',
            'created_at_helper'                => ' ',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => ' ',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => ' ',
        ],
    ],
    'vetAnswer'        => [
        'title'          => 'Respuestas médicos veterinarios',
        'title_singular' => 'Respuestas médicos veterinario',
        'fields'         => [
            'id'                                     => 'ID',
            'id_helper'                              => ' ',
            'name'                                   => 'Nombres y apellidos',
            'name_helper'                            => ' ',
            'vet_clinic'                             => 'Si trabaja en una clínica veterinaria, escriba el nombre',
            'vet_clinic_helper'                      => ' ',
            'vet_university'                         => '¿Dónde estudió medicina veterinaria?',
            'vet_university_helper'                  => ' ',
            'pet_shelters'                           => '¿Trabaja con refugios de mascotas? ¿Cual(es)?',
            'pet_shelters_helper'                    => ' ',
            'department'                             => 'Departamento',
            'department_helper'                      => ' ',
            'city'                                   => 'Ciudad',
            'city_helper'                            => ' ',
            'pet_nutrition_question'                 => '¿Sus pacientes le piden consejos sobre nutrición para las mascotas?',
            'pet_nutrition_question_helper'          => ' ',
            'recomendations_applied'                 => 'De 1 a 10 ¿qué tan fácil o difícil es que sus pacientes tengan en cuenta sus recomendaciones sobre la alimentación para las mascotas?',
            'recomendations_applied_helper'          => ' ',
            'percent_apply_diet'                     => '¿Qué porcentaje de pacientes considera usted que está alimentando a sus mascotas con dietas completas y equilibradas?',
            'percent_apply_diet_helper'              => ' ',
            'difficulty_change_food_owners'          => '¿Qué tan fácil o difícil es para los pacientes cambiar la comida de su mascota?',
            'difficulty_change_food_owners_helper'   => ' ',
            'created_at'                             => 'Created at',
            'created_at_helper'                      => ' ',
            'updated_at'                             => 'Updated at',
            'updated_at_helper'                      => ' ',
            'deleted_at'                             => 'Deleted at',
            'deleted_at_helper'                      => ' ',
            'obesity_5'                              => 'Obesidad',
            'obesity_5_helper'                       => ' ',
            'malnutrition_5'                         => 'Desnutrition',
            'malnutrition_5_helper'                  => ' ',
            'allergies_5'                            => 'Alergias',
            'allergies_5_helper'                     => ' ',
            'gastritis_5'                            => 'Gastritis',
            'gastritis_5_helper'                     => ' ',
            'diarrhea_5'                             => 'Diarrea',
            'diarrhea_5_helper'                      => ' ',
            'periodontal_5'                          => 'Periodontales',
            'periodontal_5_helper'                   => ' ',
            'other_disease_5'                        => 'Otra enfermedad',
            'other_disease_5_helper'                 => ' ',
            'other_5'                                => 'Otra',
            'other_5_helper'                         => ' ',
            'mix_food_6'                             => 'Mezclar comidas',
            'mix_food_6_helper'                      => ' ',
            'food_outtime'                           => 'Alimentar a deshoras',
            'food_outtime_helper'                    => ' ',
            'water_not_enough'                       => 'No brindar suficiente agua',
            'water_not_enough_helper'                => ' ',
            'quantities_control'                     => 'Falta de control de las cantidades a servir',
            'quantities_control_helper'              => ' ',
            'plate_higiene'                          => 'Higiene de los platos o bebederos',
            'plate_higiene_helper'                   => ' ',
            'other_bad_habit'                        => 'Otro mal hábito',
            'other_bad_habit_helper'                 => ' ',
            'other_6'                                => 'Otro',
            'other_6_helper'                         => ' ',
            'food_type_recommendation'               => '¿Qué tipo de comida recomienda para perros y gatos?',
            'food_type_recommendation_helper'        => ' ',
            'food_recomendation_concentrates'        => 'Según su experiencia profesional, ¿recomienda la alimentación basada en concentrados para perros y gatos?',
            'food_recomendation_concentrates_helper' => ' ',
            'percent_calories_concentrates'          => 'Indique el porcentaje calórico proveniente del concentrado que recomienda que una mascota consuma a diario',
            'percent_calories_concentrates_helper'   => ' ',
            'country_best_food'                      => '¿Qué país crees que produce el mejor alimento concentrado para mascotas y por qué?',
            'country_best_food_helper'               => ' ',
            'if_us_best_food'                        => 'Si su respuesta fue Estados Unidos, ¿qué marca recomienda o compra para sus mascotas?',
            'if_us_best_food_helper'                 => ' ',
            'other_11'                               => 'Otra',
            'other_11_helper'                        => ' ',
            'not_recommended_food'                   => '¿Qué alimento para mascotas no aconseja que compren sus pacientes en Colombia?',
            'not_recommended_food_helper'            => ' ',
            'frecuency_education'                    => '¿Con qué frecuencia se capacita en temas de nutrición para mascotas?',
            'frecuency_education_helper'             => ' ',
            'heard_about_pfi'                        => '¿Ha escuchado de Pet Food Institute?',
            'heard_about_pfi_helper'                 => ' ',
            'ip'                                     => 'Ip',
            'ip_helper'                              => ' ',
        ],
    ],
];
