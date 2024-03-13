<?php
/**
 * EmploymentTypeEnum
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
 * EmploymentTypeEnum Class Doc Comment
 *
 * @category Class
 * @description * &#x60;FULL_TIME&#x60; - FULL_TIME * &#x60;PART_TIME&#x60; - PART_TIME * &#x60;INTERN&#x60; - INTERN * &#x60;CONTRACTOR&#x60; - CONTRACTOR * &#x60;FREELANCE&#x60; - FREELANCE
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmploymentTypeEnum
{
    /**
     * Possible values of this enum
     */
    const FULL_TIME = 'FULL_TIME';
    const PART_TIME = 'PART_TIME';
    const INTERN = 'INTERN';
    const CONTRACTOR = 'CONTRACTOR';
    const FREELANCE = 'FREELANCE';
    

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
            self::FULL_TIME,
            self::PART_TIME,
            self::INTERN,
            self::CONTRACTOR,
            self::FREELANCE,
        ];
    }
}


