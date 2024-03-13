<?php
/**
 * SelectiveSyncConfigurationsUsageEnum
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeHRISClient\Model;
use \MergeHRISClient\ObjectSerializer;

/**
 * SelectiveSyncConfigurationsUsageEnum Class Doc Comment
 *
 * @category Class
 * @description * &#x60;IN_NEXT_SYNC&#x60; - IN_NEXT_SYNC * &#x60;IN_LAST_SYNC&#x60; - IN_LAST_SYNC
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SelectiveSyncConfigurationsUsageEnum
{
    /**
     * Possible values of this enum
     */
    const NEXT_SYNC = 'IN_NEXT_SYNC';
    const LAST_SYNC = 'IN_LAST_SYNC';
    

    /**
     * Merge attempts to unify all enum values, but in some cases the original value will be retained. Since we cannot
     * list them all here, this value is present to call attention to this behavior. That being said, PHP 7 does not
     * have real enums so this MERGE_NONSTANDARD_VALUE is unused for now, just a placeholder.
     */
    const MERGE_NONSTANDARD_VALUE = "MERGE_NONSTANDARD_VALUE";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEXT_SYNC,
            self::LAST_SYNC,
        ];
    }
}


