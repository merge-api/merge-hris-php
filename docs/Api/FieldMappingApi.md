# MergeHRISClient\FieldMappingApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fieldMappingsCreate()**](FieldMappingApi.md#fieldMappingsCreate) | **POST** /field-mappings | 
[**fieldMappingsDestroy()**](FieldMappingApi.md#fieldMappingsDestroy) | **DELETE** /field-mappings/{field_mapping_id} | 
[**fieldMappingsPartialUpdate()**](FieldMappingApi.md#fieldMappingsPartialUpdate) | **PATCH** /field-mappings/{field_mapping_id} | 
[**fieldMappingsRetrieve()**](FieldMappingApi.md#fieldMappingsRetrieve) | **GET** /field-mappings | 
[**remoteFieldsRetrieve()**](FieldMappingApi.md#remoteFieldsRetrieve) | **GET** /remote-fields | 
[**targetFieldsRetrieve()**](FieldMappingApi.md#targetFieldsRetrieve) | **GET** /target-fields | 


## `fieldMappingsCreate()`

```php
fieldMappingsCreate($x_account_token, $create_field_mapping_request): \MergeHRISClient\Model\FieldMappingInstanceResponse
```



Create new Field Mappings that will be available after the next scheduled sync. This will cause the next sync for this Linked Account to sync **ALL** data from start.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\FieldMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$create_field_mapping_request = new \MergeHRISClient\Model\CreateFieldMappingRequest(); // \MergeHRISClient\Model\CreateFieldMappingRequest

try {
    $result = $apiInstance->fieldMappingsCreate($x_account_token, $create_field_mapping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldMappingApi->fieldMappingsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **create_field_mapping_request** | [**\MergeHRISClient\Model\CreateFieldMappingRequest**](../Model/CreateFieldMappingRequest.md)|  |

### Return type

[**\MergeHRISClient\Model\FieldMappingInstanceResponse**](../Model/FieldMappingInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fieldMappingsDestroy()`

```php
fieldMappingsDestroy($x_account_token, $field_mapping_id): \MergeHRISClient\Model\FieldMappingInstanceResponse
```



Deletes Field Mappings for a Linked Account. All data related to this Field Mapping will be deleted and these changes will be reflected after the next scheduled sync. This will cause the next sync for this Linked Account to sync **ALL** data from start.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\FieldMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$field_mapping_id = 'field_mapping_id_example'; // string

try {
    $result = $apiInstance->fieldMappingsDestroy($x_account_token, $field_mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldMappingApi->fieldMappingsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **field_mapping_id** | [**string**](../Model/.md)|  |

### Return type

[**\MergeHRISClient\Model\FieldMappingInstanceResponse**](../Model/FieldMappingInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fieldMappingsPartialUpdate()`

```php
fieldMappingsPartialUpdate($x_account_token, $field_mapping_id, $patched_edit_field_mapping_request): \MergeHRISClient\Model\FieldMappingInstanceResponse
```



Create or update existing Field Mappings for a Linked Account. Changes will be reflected after the next scheduled sync. This will cause the next sync for this Linked Account to sync **ALL** data from start.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\FieldMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$field_mapping_id = 'field_mapping_id_example'; // string
$patched_edit_field_mapping_request = new \MergeHRISClient\Model\PatchedEditFieldMappingRequest(); // \MergeHRISClient\Model\PatchedEditFieldMappingRequest

try {
    $result = $apiInstance->fieldMappingsPartialUpdate($x_account_token, $field_mapping_id, $patched_edit_field_mapping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldMappingApi->fieldMappingsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **field_mapping_id** | [**string**](../Model/.md)|  |
 **patched_edit_field_mapping_request** | [**\MergeHRISClient\Model\PatchedEditFieldMappingRequest**](../Model/PatchedEditFieldMappingRequest.md)|  | [optional]

### Return type

[**\MergeHRISClient\Model\FieldMappingInstanceResponse**](../Model/FieldMappingInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fieldMappingsRetrieve()`

```php
fieldMappingsRetrieve($x_account_token): \MergeHRISClient\Model\FieldMappingApiInstanceResponse
```



Get all Field Mappings for this Linked Account. Field Mappings are mappings between third-party Remote Fields and user defined Merge fields. [Learn more](https://docs.merge.dev/supplemental-data/field-mappings/overview/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\FieldMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->fieldMappingsRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldMappingApi->fieldMappingsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\MergeHRISClient\Model\FieldMappingApiInstanceResponse**](../Model/FieldMappingApiInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteFieldsRetrieve()`

```php
remoteFieldsRetrieve($x_account_token, $common_models, $include_example_values): \MergeHRISClient\Model\RemoteFieldAPIResponse
```



Get all remote fields for a Linked Account. Remote fields are third-party fields that are accessible after initial sync if remote_data is enabled. You can use remote fields to override existing Merge fields or map a new Merge field. [Learn more](https://docs.merge.dev/supplemental-data/field-mappings/overview/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\FieldMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$common_models = 'common_models_example'; // string | A comma seperated list of Common Model names. If included, will only return Remote Fields for those Common Models.
$include_example_values = 'include_example_values_example'; // string | If true, will include example values, where available, for remote fields in the 3rd party platform. These examples come from active data from your customers.

try {
    $result = $apiInstance->remoteFieldsRetrieve($x_account_token, $common_models, $include_example_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldMappingApi->remoteFieldsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **common_models** | **string**| A comma seperated list of Common Model names. If included, will only return Remote Fields for those Common Models. | [optional]
 **include_example_values** | **string**| If true, will include example values, where available, for remote fields in the 3rd party platform. These examples come from active data from your customers. | [optional]

### Return type

[**\MergeHRISClient\Model\RemoteFieldAPIResponse**](../Model/RemoteFieldAPIResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `targetFieldsRetrieve()`

```php
targetFieldsRetrieve($x_account_token): \MergeHRISClient\Model\ExternalTargetFieldAPIResponse
```



Get all organization-wide Target Fields, this will not include any Linked Account specific Target Fields. Organization-wide Target Fields are additional fields appended to the Merge Common Model for all Linked Accounts in a category. [Learn more](https://docs.merge.dev/supplemental-data/field-mappings/target-fields/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\FieldMappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->targetFieldsRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldMappingApi->targetFieldsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\MergeHRISClient\Model\ExternalTargetFieldAPIResponse**](../Model/ExternalTargetFieldAPIResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
