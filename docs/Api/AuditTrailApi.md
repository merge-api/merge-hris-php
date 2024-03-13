# MergeHRISClient\AuditTrailApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditTrailList()**](AuditTrailApi.md#auditTrailList) | **GET** /audit-trail | 


## `auditTrailList()`

```php
auditTrailList($cursor, $end_date, $event_type, $page_size, $start_date, $user_email): \MergeHRISClient\Model\PaginatedAuditLogEventList
```



Gets a list of audit trail events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\AuditTrailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$end_date = 'end_date_example'; // string | If included, will only include audit trail events that occurred before this time
$event_type = 'event_type_example'; // string | If included, will only include events with the given event type. Possible values include: `CREATED_REMOTE_PRODUCTION_API_KEY`, `DELETED_REMOTE_PRODUCTION_API_KEY`, `CREATED_TEST_API_KEY`, `DELETED_TEST_API_KEY`, `REGENERATED_PRODUCTION_API_KEY`, `INVITED_USER`, `TWO_FACTOR_AUTH_ENABLED`, `TWO_FACTOR_AUTH_DISABLED`, `DELETED_LINKED_ACCOUNT`, `CREATED_DESTINATION`, `DELETED_DESTINATION`, `CHANGED_DESTINATION`, `CHANGED_SCOPES`, `CHANGED_PERSONAL_INFORMATION`, `CHANGED_ORGANIZATION_SETTINGS`, `ENABLED_INTEGRATION`, `DISABLED_INTEGRATION`, `ENABLED_CATEGORY`, `DISABLED_CATEGORY`, `CHANGED_PASSWORD`, `RESET_PASSWORD`, `ENABLED_REDACT_UNMAPPED_DATA_FOR_ORGANIZATION`, `ENABLED_REDACT_UNMAPPED_DATA_FOR_LINKED_ACCOUNT`, `DISABLED_REDACT_UNMAPPED_DATA_FOR_ORGANIZATION`, `DISABLED_REDACT_UNMAPPED_DATA_FOR_LINKED_ACCOUNT`, `CREATED_INTEGRATION_WIDE_FIELD_MAPPING`, `CREATED_LINKED_ACCOUNT_FIELD_MAPPING`, `CHANGED_INTEGRATION_WIDE_FIELD_MAPPING`, `CHANGED_LINKED_ACCOUNT_FIELD_MAPPING`, `DELETED_INTEGRATION_WIDE_FIELD_MAPPING`, `DELETED_LINKED_ACCOUNT_FIELD_MAPPING`
$page_size = 56; // int | Number of results to return per page.
$start_date = 'start_date_example'; // string | If included, will only include audit trail events that occurred after this time
$user_email = 'user_email_example'; // string | If provided, this will return events associated with the specified user email. Please note that the email address reflects the user's email at the time of the event, and may not be their current email.

try {
    $result = $apiInstance->auditTrailList($cursor, $end_date, $event_type, $page_size, $start_date, $user_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailApi->auditTrailList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| The pagination cursor value. | [optional]
 **end_date** | **string**| If included, will only include audit trail events that occurred before this time | [optional]
 **event_type** | **string**| If included, will only include events with the given event type. Possible values include: &#x60;CREATED_REMOTE_PRODUCTION_API_KEY&#x60;, &#x60;DELETED_REMOTE_PRODUCTION_API_KEY&#x60;, &#x60;CREATED_TEST_API_KEY&#x60;, &#x60;DELETED_TEST_API_KEY&#x60;, &#x60;REGENERATED_PRODUCTION_API_KEY&#x60;, &#x60;INVITED_USER&#x60;, &#x60;TWO_FACTOR_AUTH_ENABLED&#x60;, &#x60;TWO_FACTOR_AUTH_DISABLED&#x60;, &#x60;DELETED_LINKED_ACCOUNT&#x60;, &#x60;CREATED_DESTINATION&#x60;, &#x60;DELETED_DESTINATION&#x60;, &#x60;CHANGED_DESTINATION&#x60;, &#x60;CHANGED_SCOPES&#x60;, &#x60;CHANGED_PERSONAL_INFORMATION&#x60;, &#x60;CHANGED_ORGANIZATION_SETTINGS&#x60;, &#x60;ENABLED_INTEGRATION&#x60;, &#x60;DISABLED_INTEGRATION&#x60;, &#x60;ENABLED_CATEGORY&#x60;, &#x60;DISABLED_CATEGORY&#x60;, &#x60;CHANGED_PASSWORD&#x60;, &#x60;RESET_PASSWORD&#x60;, &#x60;ENABLED_REDACT_UNMAPPED_DATA_FOR_ORGANIZATION&#x60;, &#x60;ENABLED_REDACT_UNMAPPED_DATA_FOR_LINKED_ACCOUNT&#x60;, &#x60;DISABLED_REDACT_UNMAPPED_DATA_FOR_ORGANIZATION&#x60;, &#x60;DISABLED_REDACT_UNMAPPED_DATA_FOR_LINKED_ACCOUNT&#x60;, &#x60;CREATED_INTEGRATION_WIDE_FIELD_MAPPING&#x60;, &#x60;CREATED_LINKED_ACCOUNT_FIELD_MAPPING&#x60;, &#x60;CHANGED_INTEGRATION_WIDE_FIELD_MAPPING&#x60;, &#x60;CHANGED_LINKED_ACCOUNT_FIELD_MAPPING&#x60;, &#x60;DELETED_INTEGRATION_WIDE_FIELD_MAPPING&#x60;, &#x60;DELETED_LINKED_ACCOUNT_FIELD_MAPPING&#x60; | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **start_date** | **string**| If included, will only include audit trail events that occurred after this time | [optional]
 **user_email** | **string**| If provided, this will return events associated with the specified user email. Please note that the email address reflects the user&#39;s email at the time of the event, and may not be their current email. | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedAuditLogEventList**](../Model/PaginatedAuditLogEventList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
