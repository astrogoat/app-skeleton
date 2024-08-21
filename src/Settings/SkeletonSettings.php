<?php

namespace VendorName\Skeleton\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class SkeletonSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        // return [
        //     'url' => Rule::requiredIf($this->enabled === true),
        // ];
    }

    public function description(): string
    {
        return 'Interact with Skeleton.';
    }

    public static function group(): string
    {
        return 'skeleton';
    }
}
