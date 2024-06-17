<?php

namespace VendorName\Skeleton\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class SkeletonSettings extends AppSettings
{
    // public string $url; // Example, modify to fit your need.

    public function rules(): array
    {
//        'url' => Rule::requiredIf($this->enabled === true), // Example, modify to fit your need.
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
