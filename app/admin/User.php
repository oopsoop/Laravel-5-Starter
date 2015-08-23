<?php
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Str;
// use SleepingOwl\Admin\Admin;
// use SleepingOwl\Admin\Columns\Column;
// use SleepingOwl\Admin\Display\AdminDisplay;
// use SleepingOwl\Admin\Form\AdminForm;
// use SleepingOwl\Admin\FormItems\FormItem;

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

// Create admin model from User class with title and url alias
// Admin::model(App\User::class)
// ->title('Users')
// ->as('users-alias-name')->denyCreating(function ()
// {
// 	// Deny creating on thursday
// 	return date('w') == 4;
// })->display(function ()
// {
// 	// Describing columns for table view
// 	Column::string('name', 'Name');
// 	Column::string('email', 'Email');
// })->createAndEdit(function ()
// {
// 	// Describing elements in create and editing forms
// 				FormItem::text('name', 'Name');
// 				FormItem::text('email', 'Email');
// });

Admin::model(App\Announcement::class)->title('announcements')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->columns([
		Column::string('title')->label('Title'),
		Column::string('message')->label('message'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		        FormItem::columns()->columns([
            [
							FormItem::hidden('id'),
							FormItem::text('title', 'Title')->required()->unique(),
							FormItem::text('message', 'message')
							]
				])
	]);
	return $form;
});
