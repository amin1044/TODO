<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Nwidart\Modules\Facades\Module;

Breadcrumbs::for('home', function ($trail) {

});

    Breadcrumbs::for('list-todo', function ($trail) {
        $trail->push('Title Here', route('todo.index'));
    });

    foreach (Module::allEnabled() as $key => $value) {
        $service = "Modules\\$key\Http\Services\\$key" . "Service";
        if (Module::has($key) && class_exists($service)) {
            $service = new $service;
            $service->breadCrumbs();
        }
    }
