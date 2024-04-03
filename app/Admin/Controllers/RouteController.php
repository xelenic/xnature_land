<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Route;

class RouteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Route';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Route());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('start_location_id', __('Start location id'));
        $grid->column('end_location_id', __('End location id'));
        $grid->column('distance', __('Distance'));
        $grid->column('description', __('Description'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Route::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('start_location_id', __('Start location id'));
        $show->field('end_location_id', __('End location id'));
        $show->field('distance', __('Distance'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Route());

        $form->textarea('name', __('Name'));
        $form->number('start_location_id', __('Start location id'));
        $form->number('end_location_id', __('End location id'));
        $form->textarea('distance', __('Distance'));
        $form->textarea('description', __('Description'));
        $form->text('status', __('Status'))->default('active');

        return $form;
    }
}
