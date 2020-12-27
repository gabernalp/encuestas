<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Agentes Educativos
    Route::delete('agentes-educativos/destroy', 'AgentesEducativosController@massDestroy')->name('agentes-educativos.massDestroy');
    Route::post('agentes-educativos/parse-csv-import', 'AgentesEducativosController@parseCsvImport')->name('agentes-educativos.parseCsvImport');
    Route::post('agentes-educativos/process-csv-import', 'AgentesEducativosController@processCsvImport')->name('agentes-educativos.processCsvImport');
    Route::resource('agentes-educativos', 'AgentesEducativosController');

    // Departamentos
    Route::delete('departamentos/destroy', 'DepartamentosController@massDestroy')->name('departamentos.massDestroy');
    Route::post('departamentos/parse-csv-import', 'DepartamentosController@parseCsvImport')->name('departamentos.parseCsvImport');
    Route::post('departamentos/process-csv-import', 'DepartamentosController@processCsvImport')->name('departamentos.processCsvImport');
    Route::resource('departamentos', 'DepartamentosController');

    // Ciudades
    Route::delete('ciudades/destroy', 'CiudadesController@massDestroy')->name('ciudades.massDestroy');
    Route::post('ciudades/parse-csv-import', 'CiudadesController@parseCsvImport')->name('ciudades.parseCsvImport');
    Route::post('ciudades/process-csv-import', 'CiudadesController@processCsvImport')->name('ciudades.processCsvImport');
    Route::resource('ciudades', 'CiudadesController');

    // Cats Owners Anwers
    Route::delete('cats-owners-anwers/destroy', 'CatsOwnersAnwersController@massDestroy')->name('cats-owners-anwers.massDestroy');
    Route::resource('cats-owners-anwers', 'CatsOwnersAnwersController');

    // Dogs Owners Anwers
    Route::delete('dogs-owners-anwers/destroy', 'DogsOwnersAnwersController@massDestroy')->name('dogs-owners-anwers.massDestroy');
    Route::resource('dogs-owners-anwers', 'DogsOwnersAnwersController');

    // Vet Answers
    Route::delete('vet-answers/destroy', 'VetAnswersController@massDestroy')->name('vet-answers.massDestroy');
    Route::resource('vet-answers', 'VetAnswersController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
