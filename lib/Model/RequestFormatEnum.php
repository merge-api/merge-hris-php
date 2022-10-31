<?php
/**
 * RequestFormatEnum
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
 * RequestFormatEnum Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RequestFormatEnum
{
    /**
     * Possible values of this enum
     */
    const JSON = 'JSON';
    const XML = 'XML';
    const MULTIPART = 'MULTIPART';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JSON,
            self::XML,
            self::MULTIPART,
        ];
    }
}


