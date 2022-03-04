<?php

namespace App\Utility;

final class ProjectConstants
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    const FLASH_SUCCESS = 'success';
    const FLASH_ERROR = 'error';
    const FLASH_WARNING = 'warning';
    const FLASH_INFO = 'info';

    public static array $statuses = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    public static array $flashMessages = [
        self::FLASH_SUCCESS => "Operation successful",
        self::FLASH_WARNING => "Something went wrong",
        self::FLASH_ERROR => "Something went wrong",
        self::FLASH_INFO => "Something went wrong",
    ];

}
