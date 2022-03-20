<?php

namespace App\Utility;

final class AclMappingConstants
{
    const ADMIN_DASHBOARD = 'admin.dashboard';
    const ADMIN_ABOUT = 'admin.about';
    const ADMIN_FOOTER = 'admin.footer';
    const ADMIN_CONTACT = 'admin.contact';
    const ADMIN_DONATION = 'admin.donation';
    const ADMIN_ORGANIZATION = 'admin.organization';

    const ADMIN_AUTHOR_INDEX = 'author.index';
    const ADMIN_AUTHOR_STORE = 'author.store';
    const ADMIN_AUTHOR_CREATE = 'author.create';
    const ADMIN_AUTHOR_SHOW = 'author.show';
    const ADMIN_AUTHOR_UPDATE = 'author.update';
    const ADMIN_AUTHOR_DESTROY = 'author.destroy';
    const ADMIN_AUTHOR_EDIT = 'author.edit';

    const ADMIN_BOOK_INDEX = 'book.index';
    const ADMIN_BOOK_STORE = 'book.store';
    const ADMIN_BOOK_CREATE = 'book.create';
    const ADMIN_BOOK_SHOW = 'book.show';
    const ADMIN_BOOK_UPDATE = 'book.update';
    const ADMIN_BOOK_DESTROY = 'book.destroy';
    const ADMIN_BOOK_EDIT = 'book.edit';

    const ADMIN_CATEGORY_INDEX = 'category.index';
    const ADMIN_CATEGORY_STORE = 'category.store';
    const ADMIN_CATEGORY_CREATE = 'category.create';
    const ADMIN_CATEGORY_SHOW = 'category.show';
    const ADMIN_CATEGORY_UPDATE = 'category.update';
    const ADMIN_CATEGORY_DESTROY = 'category.destroy';
    const ADMIN_CATEGORY_EDIT = 'category.edit';

    const ADMIN_COMMENT_INDEX = 'comment.index';
    const ADMIN_COMMENT_STORE = 'comment.store';
    const ADMIN_COMMENT_CREATE = 'comment.create';
    const ADMIN_COMMENT_SHOW = 'comment.show';
    const ADMIN_COMMENT_UPDATE = 'comment.update';
    const ADMIN_COMMENT_DESTROY = 'comment.destroy';
    const ADMIN_COMMENT_EDIT = 'comment.edit';

    const ADMIN_MENU_INDEX = 'menu.index';
    const ADMIN_MENU_STORE = 'menu.store';
    const ADMIN_MENU_CREATE = 'menu.create';
    const ADMIN_MENU_SHOW = 'menu.show';
    const ADMIN_MENU_UPDATE = 'menu.update';
    const ADMIN_MENU_DESTROY = 'menu.destroy';
    const ADMIN_MENU_EDIT = 'menu.edit';

    const ADMIN_POST_INDEX = 'post.index';
    const ADMIN_POST_STORE = 'post.store';
    const ADMIN_POST_CREATE = 'post.create';
    const ADMIN_POST_SHOW = 'post.show';
    const ADMIN_POST_UPDATE = 'post.update';
    const ADMIN_POST_DESTROY = 'post.destroy';
    const ADMIN_POST_EDIT = 'post.edit';

    const ADMIN_ROLE_INDEX = 'role.index';
    const ADMIN_ROLE_STORE = 'role.store';
    const ADMIN_ROLE_CREATE = 'role.create';
    const ADMIN_ROLE_SHOW = 'role.show';
    const ADMIN_ROLE_UPDATE = 'role.update';
    const ADMIN_ROLE_DESTROY = 'role.destroy';
    const ADMIN_ROLE_EDIT = 'role.edit';

    const ADMIN_TAG_INDEX = 'tag.index';
    const ADMIN_TAG_STORE = 'tag.store';
    const ADMIN_TAG_CREATE = 'tag.create';
    const ADMIN_TAG_SHOW = 'tag.show';
    const ADMIN_TAG_UPDATE = 'tag.update';
    const ADMIN_TAG_DESTROY = 'tag.destroy';
    const ADMIN_TAG_EDIT = 'tag.edit';

    const ADMIN_USER_INDEX = 'user.index';
    const ADMIN_USER_STORE = 'user.store';
    const ADMIN_USER_CREATE = 'user.create';
    const ADMIN_USER_SHOW = 'user.show';
    const ADMIN_USER_UPDATE = 'user.update';
    const ADMIN_USER_DESTROY = 'user.destroy';
    const ADMIN_USER_EDIT = 'user.edit';

    public static array $permissions = [
        self::ADMIN_ABOUT => 'about',
        self::ADMIN_FOOTER => 'footer',
        self::ADMIN_CONTACT => 'contact',
        self::ADMIN_DONATION => 'donation',
        self::ADMIN_ORGANIZATION => 'organization',

        self::ADMIN_AUTHOR_INDEX => 'author_read',
        self::ADMIN_AUTHOR_STORE => 'author_create',
        self::ADMIN_AUTHOR_CREATE => 'author_create',
        self::ADMIN_AUTHOR_SHOW => 'author_read',
        self::ADMIN_AUTHOR_UPDATE => 'author_update',
        self::ADMIN_AUTHOR_DESTROY => 'author_delete',
        self::ADMIN_AUTHOR_EDIT => 'author_update',

        self::ADMIN_BOOK_INDEX => 'book_read',
        self::ADMIN_BOOK_STORE => 'book_create',
        self::ADMIN_BOOK_CREATE => 'book_create',
        self::ADMIN_BOOK_SHOW => 'book_read',
        self::ADMIN_BOOK_UPDATE => 'book_update',
        self::ADMIN_BOOK_DESTROY => 'book_delete',
        self::ADMIN_BOOK_EDIT => 'book_update',

        self::ADMIN_CATEGORY_INDEX => 'category_read',
        self::ADMIN_CATEGORY_STORE => 'category_create',
        self::ADMIN_CATEGORY_CREATE => 'category_create',
        self::ADMIN_CATEGORY_SHOW => 'category_show',
        self::ADMIN_CATEGORY_UPDATE => 'category_update',
        self::ADMIN_CATEGORY_DESTROY => 'category_delete',
        self::ADMIN_CATEGORY_EDIT => 'category_update',

        self::ADMIN_COMMENT_INDEX => 'comment_read',
        self::ADMIN_COMMENT_STORE => 'comment_create',
        self::ADMIN_COMMENT_CREATE => 'comment_create',
        self::ADMIN_COMMENT_SHOW => 'comment_read',
        self::ADMIN_COMMENT_UPDATE => 'comment_update',
        self::ADMIN_COMMENT_DESTROY => 'comment_delete',
        self::ADMIN_COMMENT_EDIT => 'comment_update',

        self::ADMIN_MENU_INDEX => 'menu_read',
        self::ADMIN_MENU_STORE => 'menu_create',
        self::ADMIN_MENU_CREATE => 'menu_create',
        self::ADMIN_MENU_SHOW => 'menu_read',
        self::ADMIN_MENU_UPDATE => 'menu_update',
        self::ADMIN_MENU_DESTROY => 'menu_delete',
        self::ADMIN_MENU_EDIT => 'menu_update',

        self::ADMIN_POST_INDEX => 'post_read',
        self::ADMIN_POST_STORE => 'post_create',
        self::ADMIN_POST_CREATE => 'post_create',
        self::ADMIN_POST_SHOW => 'post_read',
        self::ADMIN_POST_UPDATE => 'post_update',
        self::ADMIN_POST_DESTROY => 'post_delete',
        self::ADMIN_POST_EDIT => 'post_update',

        self::ADMIN_ROLE_INDEX => 'role_read',
        self::ADMIN_ROLE_STORE => 'role_create',
        self::ADMIN_ROLE_CREATE => 'role_create',
        self::ADMIN_ROLE_SHOW => 'role_read',
        self::ADMIN_ROLE_UPDATE => 'role_update',
        self::ADMIN_ROLE_DESTROY => 'role_delete',
        self::ADMIN_ROLE_EDIT => 'role_update',

        self::ADMIN_TAG_INDEX => 'tag_read',
        self::ADMIN_TAG_STORE => 'tag_create',
        self::ADMIN_TAG_CREATE => 'tag_create',
        self::ADMIN_TAG_SHOW => 'tag_read',
        self::ADMIN_TAG_UPDATE => 'tag_update',
        self::ADMIN_TAG_DESTROY => 'tag_delete',
        self::ADMIN_TAG_EDIT => 'tag_update',

        self::ADMIN_USER_INDEX => 'user_read',
        self::ADMIN_USER_STORE => 'user_create',
        self::ADMIN_USER_CREATE => 'user_create',
        self::ADMIN_USER_SHOW => 'user_read',
        self::ADMIN_USER_UPDATE => 'user_update',
        self::ADMIN_USER_DESTROY => 'user_delete',
        self::ADMIN_USER_EDIT => 'user_update',
    ];
}
