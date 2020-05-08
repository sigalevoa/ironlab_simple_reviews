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

    'models' => [
        'fields' => [
            'publish'       => 'Publish',
            'name'          => 'Name',
            'text'          => 'Review text'
        ],

        'columns' => [
            'name'          => 'Name',
            'created_at'    => 'Created',
            'updated_at'    => 'Updated',
            'publish'       => 'Status',
            'unread'        => 'New reviews'
        ],
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

        'outputAllReviews' => [
            'title'         => 'Output reviews at once',
            'description'   => 'Output reviews at once without moderation'
        ],

        'reviewstyle'	=> [
        	'title'			=> 'Add style',
        	'description'	=> 'You need to put the tag {% style %} in the template'
        ],

        'enable_tiny_mce' => [
            'title'         => 'TinyMCE',
            'description'    => 'Enable texteditor TinyMCE'
        ],

        'lang_tiny_mce' => [
            'title'         => 'localization TinyMCE',
            'description'    => 'localization for TinyMCE. default enUS'
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

        'outputAllReviews' => [
            'title'         => 'Output reviews at once',
            'description'   => 'Output reviews at once without moderation'
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
            'name'          => 'Reviews with paginate',
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