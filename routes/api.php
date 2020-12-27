<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Agentes Educativos
    Route::apiResource('agentes-educativos', 'AgentesEducativosApiController');

    // Departamentos
    Route::apiResource('departamentos', 'DepartamentosApiController');

    // Ciudades
    Route::apiResource('ciudades', 'CiudadesApiController');

    // Cats Owners Anwers
    Route::apiResource('cats-owners-anwers', 'CatsOwnersAnwersApiController');

    // Dogs Owners Anwers
    Route::apiResource('dogs-owners-anwers', 'DogsOwnersAnwersApiController');

    // Vet Answers
    Route::apiResource('vet-answers', 'VetAnswersApiController');
});
