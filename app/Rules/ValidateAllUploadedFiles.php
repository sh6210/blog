<?php

namespace App\Rules;

use App\Utility\ProjectConstants;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

class ValidateAllUploadedFiles implements Rule
{
    private string $errorMessage;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->errorMessage = 'Upload File Error';
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param $values
     * @return bool
     */
    public function passes($attribute, $values): bool
    {
        if (!is_array($values)) {
            return $this->checkValidFormat($values) && $this->checkValidSize($values);
        }

        /** @var UploadedFile $value */
        foreach ($values as $value) {
            if (!$this->checkValidFormat($value) || !$this->checkValidSize($value)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return $this->errorMessage;
    }

    private function checkValidFormat(UploadedFile $value): bool
    {
        if (!array_search($value->getClientMimeType(), ProjectConstants::$allowedUploadTypes)) {
            $this->errorMessage = 'Upload file type error, allowed types are '. implode(',', array_keys(ProjectConstants::$allowedUploadTypes));
            return false;
        }

        return true;
    }

    private function checkValidSize(UploadedFile $value): bool
    {
        if ($value->getSize() > (MAX_UPLOAD_SIZE * 1024 * 1024)) {
            $this->errorMessage = 'Sorry upload exceeding max upload size';
            return false;
        }

        return true;
    }
}
