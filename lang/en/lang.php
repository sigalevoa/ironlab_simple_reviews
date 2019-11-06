<?php

return [
	'plugin' => [
		'details' => [
			'name' 			=> 'Simple Reviews',
			'description' 	=> 'Plugin for sending reviews'
		],

		'menu' => [
			'name'	=> 'Simple Reviews'
		]
	],

    'simple_review_component' => [
        'info' => [
        	'name' 			=> 'Review',
        	'description' 	=> 'Form for sending reviews'
        ],

        'success' => [
        	'title'			=> 'Success message',
        	'description'	=> 'Success message text',
        	'default'		=> 'Review sent successfull'
        ],

        'error'	=> [
        	'title'			=> 'Error message',
        	'description'	=> 'Error message text',
        	'default'		=> 'Review sent error'
        ],

        'reviewstyle'	=> [
        	'title'			=> 'Add style',
        	'description'	=> 'You need to put the tag {% style %} in the template'
        ]
    ],

    'simple_reviews_component' => [
        'info' => [
            'name'          => 'Reviews',
            'description'   => 'Reviews List'
        ],

        'items' => [
            'title'         => 'Items',
            'description'   => 'Items per page'
        ],

        'sortorder' => [
            'title'         => 'Sort',
            'description'   => 'Sort reviews'
        ],

        'reviewstyle' => [
            'title'         => 'Add style',
            'description'   => 'You need to put the tag {% style %} in the template'
        ],

        'sortlist' => [
            'new'           => 'new',
            'old'           => 'old',
            'random'        => 'random'
        ]
    ],

    'simpleReview_component_paginate' => [
        'info' => [
            'name'          => 'Reviews whith paginate',
            'description'   => 'Component for page reviews'
        ],

        'items' => [
            'title'         => 'Items',
            'description'   => 'Items per page'
        ],

        'sortorder' => [
            'title'         => 'Sort',
            'description'   => 'Sort reviews'
        ],

        'reviewstyle' => [
            'title'         => 'Add style',
            'description'   => 'You need to put the tag {% style %} in the template'
        ],

        'sortlist' => [
            'new'           => 'new',
            'old'           => 'old'
        ]
    ],

    'breadcrumbs' => [
        'reviews_list'      => 'Reviews',
        'review'            => 'Review',
        'autor'             => 'author:',
        'new_review'        => 'New Review'
    ],

    'buttons' => [
        'create'            => 'Ceate',
        'save'              => 'Save',
        'save_indicator'    => 'Saving...',
        'save_and_close'    => 'Save and Close',
        'or'                => 'or',
        'cancel'            => 'Cancel',
        'remove_indicator'  => 'Deleting...',
        'remove_confirm'    => 'Delete this review?',
        'new_review'        => 'New Review',
        'delete_selected'   => 'Delete selected',
        'delete_confirm'    => 'Delete selected Reviews?'
    ],

    'errors' => [
        'return_list'       => 'Return to reviews list',
    ],

    'messages' => [
        'save'              => 'Review saved',
        'remove'            => 'Review deleted'
    ],

    'controllers_titles' => [
        'create'            => 'New Review',
        'update'            => 'Update Review',
        'preveiw'           => 'Preview Review'
    ],

    'unread' => 'new'

];

?>