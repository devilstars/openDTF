<?php

namespace App\Http\Services;

/**
 * Class AbilitiesService
 */
class AbilitiesService
{
    public function allRoles()
    {
        return [
            0 => 'Пользователь',
            1 => 'Администратор',
            2 => 'Модератор'
        ];
    }

    /**
     * Список всех прав
     * @return string[]
     */
    public function allAbilities()
    {
        return [
            /* Юзеры */
            'user:edit_profile' => 'Редактирование пользователей',
            'user:delete' => 'Удаление пользователей',
            'user:edit_roles' => 'Роли пользователя',
            'user:ban' => 'Может забанить пользователя',

            /* Категории */
            'category:edit' => 'Редактирование категорий',
            'category:delete' => 'Удаление категорий',

            /* Комментарии */
            'comment:add' => 'Добавлять комментарии',
            'comment:edit' => 'Редакторовать комментарии',
            'comment:delete' => 'Удалять комментарии',

            /* Посты */
            'post:add' => 'Добавлять посты',
            'post:edit' => 'Редактирование постов',
            'post:permanent_edit' => 'Постоянное редактирование постов',
            'post:delete' => 'Удаление постов',
        ];
    }

    /**
     * Права пользователя по-умолчанию
     * @return string[]
     */
    public function  userDefaultAbilities() {
        return [

        ];
    }
}
