<?php


namespace Modules\Attendance\Http\Services;


use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Spatie\Menu\Html;
use Spatie\Menu\Menu;

class AttendanceService
{
    public function breadCrumbs()
    {
        /**
         * attendance List
         */
        Breadcrumbs::for('list-attendance', function ($trail) {
            $trail->push('لیست حضور غیاب', route('admin.attendance.index'));
        });

        /**
         * attendance create
         */
        Breadcrumbs::for('create-attendance', function ($trail) {
            $trail->parent('list-attendance');
            $trail->push('افزودن حضور غیاب');
        });

        /**
         * attendance edit
         */
        Breadcrumbs::for('edit-attendance', function ($trail) {
            $trail->parent('list-attendance');
            $trail->push('ویرایش حضور غیاب');
        });

    }
}
