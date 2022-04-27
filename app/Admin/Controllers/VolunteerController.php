<?php

namespace App\Admin\Controllers;

use App\Models\Volunteer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VolunteerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Volunteer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Volunteer());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('user_id', __('User id'));
        $grid->column('user_name', __('User name'));
        $grid->column('user_email', __('User email'));
        $grid->column('user_mobile', __('User mobile'));
        $grid->column('agency_id', __('Agency id'));

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
        $show = new Show(Volunteer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('user_id', __('User id'));
        $show->field('user_name', __('User name'));
        $show->field('user_email', __('User email'));
        $show->field('user_mobile', __('User mobile'));
        $show->field('agency_id', __('Agency id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Volunteer());

        $form->number('user_id', __('User id'));
        $form->text('user_name', __('User name'));
        $form->text('user_email', __('User email'));
        $form->text('user_mobile', __('User mobile'));
        $form->number('agency_id', __('Agency id'));

        return $form;
    }
}
