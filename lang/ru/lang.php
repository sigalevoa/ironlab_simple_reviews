<?php

return [
	'plugin' => [
		'details' => [
			'name' 			=> 'Простые Отзывы',
			'description' 	=> 'Плагин для отправки и модерации отзывов'
		],

		'menu' => [
			'name'	=> 'Простые Отзывы'
		]
	],

    'models' => [
        'fields' => [
            'publish'       => 'Опубликовать',
            'name'          => 'Имя',
            'text'          => 'Текст отзыва'
        ],

        'columns' => [
            'name'          => 'Имя',
            'created_at'    => 'Создано',
            'updated_at'    => 'Обновлено',
            'publish'       => 'Статус',
            'unread'        => 'Новые отзывы'
        ],
    ],

    'simple_review_component' => [
        'info' => [
        	'name' 			=> 'Отзыв',
        	'description' 	=> 'Форма для отправки отзыва'
        ],

        'success' => [
        	'title'			=> 'Сообщение об отправке',
        	'description'	=> 'Текст cообщения при успешной отправке отзыва',
        	'default'		=> 'Спасибо! Отзыв успешно отправлен'
        ],

        'error'	=> [
        	'title'			=> 'Сообщение об ошибке',
        	'description'	=> 'Текст cообщения с ошибкой отправки отзыва',
        	'default'		=> 'Отзыв не был отправлен'
        ],

        'reviewstyle'	=> [
        	'title'			=> 'Подключить стили',
        	'description'	=> 'Для подключения необходимо в шаблон доавить тег {% styles %}'
        ],

        'enable_tiny_mce' => [
            'title'         => 'TinyMCE',
            'description'    => 'Подключить текстовый редактор TinyMCE'
        ],

        'lang_tiny_mce' => [
            'title'         => 'Язык TinyMCE',
            'description'    => 'Локализация для TinyMCE. По умолчанию enUS'
        ]
    ],

    'simple_reviews_component' => [
        'info' => [
            'name'          => 'Отзывы',
            'description'   => 'Список отзывов'
        ],

        'items' => [
            'title'         => 'Количество',
            'description'   => 'Определяет количетсво отзывов на странице'
        ],

        'sortorder' => [
            'title'         => 'Отсортировать отзывы',
            'description'   => 'Отсортировать отзывы для отображения на странице'
        ],

        'outputAllReviews' => [
            'title'         => 'Выводить отзывы сразу',
            'description'   => 'Выводить отзывы сразу без модерации'
        ],

        'reviewstyle' => [
            'title'         => 'Подключить стили',
            'description'   => 'Для подключения необходимо в шаблон доавить тег {% styles %}'
        ],

        'sortlist' => [
            'new'           => 'Новые',
            'old'           => 'Старые',
            'random'        => 'Случайные'
        ]
    ],

    'simpleReview_component_paginate' => [
        'info' => [
            'name'          => 'Отзывы с пагинацией',
            'description'   => 'Компонент для страницы с отзывами'
        ],

        'items' => [
            'title'         => 'Количество',
            'description'   => 'Определяет количетсво отзывов на странице'
        ],

        'sortorder' => [
            'title'         => 'Отсортировать отзывы',
            'description'   => 'Отсортировать отзывы для отображения на странице'
        ],

        'outputAllReviews' => [
            'title'         => 'Выводить все отзывы без модерации',
            'description'   => 'Выводить отзывы сразу без модерации'
        ],

        'reviewstyle' => [
            'title'         => 'Подключить стили',
            'description'   => 'Для подключения необходимо в шаблон доавить тег {% styles %}'
        ],

        'sortlist' => [
            'new'           => 'Новые',
            'old'           => 'Старые'
        ]
    ],

    'breadcrumbs' => [
        'reviews_list'      => 'Отзывы',
        'review'            => 'Отзыв',
        'autor'             => 'автор:',
        'new_review'        => 'Новый Отзыв'
    ],

    'buttons' => [
        'create'            => 'Создать',
        'save'              => 'Сохранить',
        'save_indicator'    => 'Сохранение...',
        'save_and_close'    => 'Сохранить и Закрыть',
        'or'                => 'или',
        'cancel'            => 'Отменить',
        'remove_indicator'  => 'Удаление Отзыва',
        'remove_confirm'    => 'Удалить этот отзыв?',
        'new_review'        => 'Новый отзыв',
        'delete_selected'   => 'Удалить выбранные',
        'delete_confirm'    => 'Удалить выбранные отзывы?'
    ],

    'errors' => [
        'return_list'       => 'Вернутсья к списку отзывов',
    ],

    'messages' => [
        'save'              => 'Отзыв сохранен',
        'remove'            => 'Отзыв удален'
    ],

    'controllers_titles' => [
        'create'            => 'Новый Отзыв',
        'update'            => 'Редактирование Отзыва',
        'preveiw'           => 'Предпросмотр Отзыва'
    ],

    'unread' => 'новый'

];

?>