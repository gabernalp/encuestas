<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'encuestum_access',
            ],
            [
                'id'    => 20,
                'title' => 'agentes_educativo_create',
            ],
            [
                'id'    => 21,
                'title' => 'agentes_educativo_edit',
            ],
            [
                'id'    => 22,
                'title' => 'agentes_educativo_show',
            ],
            [
                'id'    => 23,
                'title' => 'agentes_educativo_delete',
            ],
            [
                'id'    => 24,
                'title' => 'agentes_educativo_access',
            ],
            [
                'id'    => 25,
                'title' => 'departamento_create',
            ],
            [
                'id'    => 26,
                'title' => 'departamento_edit',
            ],
            [
                'id'    => 27,
                'title' => 'departamento_show',
            ],
            [
                'id'    => 28,
                'title' => 'departamento_delete',
            ],
            [
                'id'    => 29,
                'title' => 'departamento_access',
            ],
            [
                'id'    => 30,
                'title' => 'ciudade_create',
            ],
            [
                'id'    => 31,
                'title' => 'ciudade_edit',
            ],
            [
                'id'    => 32,
                'title' => 'ciudade_show',
            ],
            [
                'id'    => 33,
                'title' => 'ciudade_delete',
            ],
            [
                'id'    => 34,
                'title' => 'ciudade_access',
            ],
            [
                'id'    => 35,
                'title' => 'cats_owners_anwer_create',
            ],
            [
                'id'    => 36,
                'title' => 'cats_owners_anwer_edit',
            ],
            [
                'id'    => 37,
                'title' => 'cats_owners_anwer_show',
            ],
            [
                'id'    => 38,
                'title' => 'cats_owners_anwer_delete',
            ],
            [
                'id'    => 39,
                'title' => 'cats_owners_anwer_access',
            ],
            [
                'id'    => 40,
                'title' => 'dogs_owners_anwer_create',
            ],
            [
                'id'    => 41,
                'title' => 'dogs_owners_anwer_edit',
            ],
            [
                'id'    => 42,
                'title' => 'dogs_owners_anwer_show',
            ],
            [
                'id'    => 43,
                'title' => 'dogs_owners_anwer_delete',
            ],
            [
                'id'    => 44,
                'title' => 'dogs_owners_anwer_access',
            ],
            [
                'id'    => 45,
                'title' => 'vet_answer_create',
            ],
            [
                'id'    => 46,
                'title' => 'vet_answer_edit',
            ],
            [
                'id'    => 47,
                'title' => 'vet_answer_show',
            ],
            [
                'id'    => 48,
                'title' => 'vet_answer_delete',
            ],
            [
                'id'    => 49,
                'title' => 'vet_answer_access',
            ],
            [
                'id'    => 50,
                'title' => 'prize_code_create',
            ],
            [
                'id'    => 51,
                'title' => 'prize_code_edit',
            ],
            [
                'id'    => 52,
                'title' => 'prize_code_show',
            ],
            [
                'id'    => 53,
                'title' => 'prize_code_delete',
            ],
            [
                'id'    => 54,
                'title' => 'prize_code_access',
            ],
            [
                'id'    => 55,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
