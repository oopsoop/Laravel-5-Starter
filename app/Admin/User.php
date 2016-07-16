<?php
use App\User;
use AdminSection;
AdminSection::registerModel(User::class, function (ModelConfiguration $model) {
    $model->setTitle('Companies');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('名称')->setWidth('400px'),
            AdminColumn::text('password')->setLabel('名称')->setWidth('400px'),
            AdminColumn::text('email')->setLabel('Email')->setAttribute('class', 'text-muted'),
        ]);
        $display->paginate(15);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Title')->required()->unique(),
            AdminFormElement::text('password', 'Address')->setRows(2),
            AdminFormElement::text('password', 'Phone')
        );
        return $form;
    });
})
	    ->addMenuPage(User::class, 0)
	    ->setIcon('fa fa-bank');
