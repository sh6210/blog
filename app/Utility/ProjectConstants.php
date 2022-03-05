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

    const PDF = 'pdf';
    const CSV = 'csv';
    const PNG = 'png';
    const JPG = 'jpg';
    const JPEG = 'jpeg';

    const YES = 'yes';
    const NO = 'no';

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
