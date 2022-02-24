<?php


namespace Modules\ToDo\Http\Services;


use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Spatie\Menu\Html;
use Spatie\Menu\Menu;

class ToDoServiceService
{
    public function breadCrumbs()
    {
        /**
         * about List
         */
        Breadcrumbs::for('list-todo', function ($trail) {
            $trail->push('لیست درباره ما', route('admin.todo.index'));
        });

        /**
         * about create
         */
        Breadcrumbs::for('create-todo', function ($trail) {
            $trail->parent('list-todo');
            $trail->push('افزودن درباره ما');
        });

        /**
         * about edit
         */
        Breadcrumbs::for('edit-todo', function ($trail) {
            $trail->parent('list-todo');
            $trail->push('ویرایش درباره ما');
        });

    }
}
