<?php
$acl = [ //Access Control List
            'admin-home' => ['admin', 'author'],
            'recipe-add' => ['admin', 'author'],
            'recipe-addExecute' => ['admin', 'author'],
            'admin-recipe-browse' => ['admin', 'author'],
            'admin-recipe-edit' => ['admin', 'author'],
            'admin-recipe-edit-execute' => ['admin', 'author'],
            'admin-recipe-delete' => ['admin', 'author'],
            'admin-category-browse' => ['admin', 'author'],
            'admin-category-add' => ['admin', 'author'],
            'admin-category-add-execute' => ['admin', 'author'],
            'admin-category-edit' => ['admin', 'author'],
            'admin-category-delete' => ['admin', 'author'],
            'admin-user-browse' => ['admin'],
            'admin-user-add' => ['admin'],
            'admin-user-add-execute' => ['admin'],
            'admin-user-edit' => ['admin'],
            'admin-user-edit-execute' => ['admin'],
            'admin-user-delete' => ['admin'],
            'admin-user-session-edit' => ['admin', 'author'],
            'admin-user-session-edit-execute' => ['admin', 'author']
];