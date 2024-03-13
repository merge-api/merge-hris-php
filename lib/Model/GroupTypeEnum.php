<?php
/**
 * GroupTypeEnum
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
 * GroupTypeEnum Class Doc Comment
 *
 * @category Class
 * @description * &#x60;TEAM&#x60; - TEAM * &#x60;DEPARTMENT&#x60; - DEPARTMENT * &#x60;COST_CENTER&#x60; - COST_CENTER * &#x60;BUSINESS_UNIT&#x60; - BUSINESS_UNIT * &#x60;GROUP&#x60; - GROUP
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupTypeEnum
{
    /**
     * Possible values of this enum
     */
    const TEAM = 'TEAM';
    const DEPARTMENT = 'DEPARTMENT';
    const COST_CENTER = 'COST_CENTER';
    const BUSINESS_UNIT = 'BUSINESS_UNIT';
    const GROUP = 'GROUP';
    

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
            self::TEAM,
            self::DEPARTMENT,
            self::COST_CENTER,
            self::BUSINESS_UNIT,
            self::GROUP,
        ];
    }
}


