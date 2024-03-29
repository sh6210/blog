<?php

namespace App\Utility;

final class ProjectConstants
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    const FLASH_SUCCESS = 'success';
    const FLASH_ERROR = 'error';
    const FLASH_DANGER = 'danger';
    const FLASH_WARNING = 'warning';
    const FLASH_INFO = 'info';

    const PDF = 'application/pdf';
    const CSV = 'csv';
    const PNG = 'image/png';
    const JPG = 'image/jpg';
    const JPEG = 'image/jpeg';

    const YES = 1;
    const NO = 0;

    const POST_TYPE_1 = 'type_001';
    const POST_TYPE_2 = 'type_002';
    const POST_TYPE_3 = 'type_003';

    const THEME_COLOR_BLACK = 'black';
    const THEME_COLOR_WHITE = 'white';

    const PERMISSION_MODULE_CATEGORY = 'category';
    const PERMISSION_MODULE_TAG = 'tag';
    const PERMISSION_MODULE_BOOK = 'book';
    const PERMISSION_MODULE_COMMENT = 'comment';
    const PERMISSION_MODULE_MENU = 'menu';
    const PERMISSION_MODULE_ROLE = 'role';
    const PERMISSION_MODULE_USER = 'user';
    const PERMISSION_MODULE_POST = 'post';
    const PERMISSION_MODULE_AUTHOR = 'author';

    const PERMISSION_SITE_INFO = 'site_info';
    const PERMISSION_GENERAL_INFO = 'general_info';
    const PERMISSION_ORGANIZATION = 'organization';
    const PERMISSION_ABOUT = 'about';
    const PERMISSION_CONTACT = 'contact';
    const PERMISSION_FOOTER = 'footer';
    const PERMISSION_DONATION = 'donation';

    public static array $uploadAbleImageTypes = [
        self::JPEG => 'JPEG',
        self::JPG => 'JPG',
        self::PNG => 'PNG'
    ];

    public static array $modulePermissions = [
        self::PERMISSION_MODULE_CATEGORY => 'Category',
        self::PERMISSION_MODULE_TAG => 'Tag',
        self::PERMISSION_MODULE_BOOK => 'Book',
        self::PERMISSION_MODULE_COMMENT => 'Comment',
        self::PERMISSION_MODULE_MENU => 'Menu',
        self::PERMISSION_MODULE_ROLE => 'Role',
        self::PERMISSION_MODULE_USER => 'User',
        self::PERMISSION_MODULE_POST => 'Post',
        self::PERMISSION_MODULE_AUTHOR => 'Author',
    ];

    public static array $singlePermissions = [
        self::PERMISSION_SITE_INFO => 'Site Info',
        self::PERMISSION_GENERAL_INFO => 'General Info',
        self::PERMISSION_ORGANIZATION => 'Organization',
        self::PERMISSION_ABOUT => 'About',
        self::PERMISSION_CONTACT => 'Contact',
        self::PERMISSION_FOOTER => 'Footer',
        self::PERMISSION_DONATION => 'Donation',
    ];

    public static array $themeColors = [
        self::THEME_COLOR_BLACK => 'Black',
        self::THEME_COLOR_WHITE => 'White',
    ];

    public static array $postTypes = [
        self::POST_TYPE_1 => 'Post Type 001',
        self::POST_TYPE_2 => 'Post Type 002',
        self::POST_TYPE_3 => 'Post Type 003',
    ];

    public static array $yesNo = [
        self::YES => 'Yes',
        self::NO => 'No',
    ];

    public static array $statuses = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    public static array $flashMessages = [
        self::FLASH_SUCCESS => "Operation successful",
        self::FLASH_WARNING => "Something went wrong",
        self::FLASH_ERROR => "Something went wrong",
        self::FLASH_INFO => "Something went wrong",
        self::FLASH_DANGER => "Something went wrong",
    ];

    public static array $allowedUploadTypes = [
//        self::PDF  => 'application/pdf',
//        self::CSV  => 'text/csv',
        self::PNG  => 'image/png',
        self::JPG  => 'image/jpg',
        self::JPEG => 'image/jpeg',
    ];
}
