<?php

return array(
    'db' => array(
        'table' => 'redirect_map',
        'pagination' => array(
            'per_page' => 20,
            'uri' => '/admin/redirect_map',
        ),
    ),
    'cache' => array(
        'tags' => array('redirect_map'),
    ),
    'options' => array(
        'caption' => 'Таблица редиректов',
        'ident' => 'redirect_map',
        'form_ident' => 'redirect_map-form',
        'form_width' => '920px',
        'table_ident' => 'redirect_map-table',
        'action_url' => '/admin/handle/redirect_map',
        'not_found' => 'пусто',
        'is_sortable' => true,
        'model' => 'Litvin\Redirectmap\Models\RedirectMap',
    ),
    'position' => array(
        'tabs' => array(
            'Общая' => array(
                'id',
                'old_link',
                'new_link',
            ),
        )
    ),
    'fields' => array(
        'id' => array(
            'caption' => '#',
            'type' => 'readonly',
            'class' => 'col-id',
            'width' => '1%',
            'hide' => true,
            'is_sorting' => false,
            'hide_list' => true,
        ),
        'old_link' => array(
            'caption' => 'Старая ссылка [Например: information/contacts]',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'field' => 'string',
        ),
        'new_link' => array(
            'caption' => 'Новая ссылка [Например: info/kontakty]',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'field' => 'string',
        ),
        'created_at' => array(
            'caption' => 'Дата добавления',
            'type' => 'readonly',
            'hide_list' => true,
            'is_sorting' => true,
            'hide' => true,
            'field' => 'timestamp',
        ),
        'updated_at' => array(
            'caption' => 'Дата обновления',
            'type' => 'readonly',
            'hide_list' => true,
            'is_sorting' => true,
            'hide' => true,
            'field' => 'timestamp',
        ),
    ),
    'filters' => array(
    ),
    'actions' => array(
        /* 'search' => array(
             'caption' => 'Поиск',
         ),*/
        'insert' => array(
            'caption' => 'Добавить',
            'check' => function() {
                return true;
            }
        ),

        'clone' => array(
            'caption' => 'Клонировать',
            'check' => function() {
                return true;
            }
        ),
        'update' => array(
            'caption' => 'Редактировать',
            'check' => function() {
                return true;
            }
        ),
        'revisions' => array(
            'caption' => 'Версии',
            'check' => function() {
                return true;
            }
        ),
        'delete' => array(
            'caption' => 'Удалить',
            'check' => function() {
                return true;
            }
        ),
    ),
);