# MergeHRISClient\LinkedAccountsApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkedAccountsList()**](LinkedAccountsApi.md#linkedAccountsList) | **GET** /linked-accounts | 


## `linkedAccountsList()`

```php
linkedAccountsList($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $integration_name, $is_test_account, $page_size, $status): \MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList
```



List linked accounts for your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\LinkedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$end_user_email_address = 'end_user_email_address_example'; // string
$end_user_organization_name = 'end_user_organization_name_example'; // string
$end_user_origin_id = 'end_user_origin_id_example'; // string
$end_user_origin_ids = 'end_user_origin_ids_example'; // string | Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once
$id = 'id_example'; // string
$ids = 'ids_example'; // string | Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once
$integration_name = 'integration_name_example'; // string
$is_test_account = 'is_test_account_example'; // string | If included, will only include test linked accounts. If not included, will only include non-test linked accounts
$page_size = 56; // int | Number of results to return per page.
$status = 'status_example'; // string | Filter by status. Options: `COMPLETE`, `INCOMPLETE`, `RELINK_NEEDED`

try {
    $result = $apiInstance->linkedAccountsList($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $integration_name, $is_test_account, $page_size, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedAccountsApi->linkedAccountsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **end_user_email_address** | **string**|  | [optional]
 **end_user_organization_name** | **string**|  | [optional]
 **end_user_origin_id** | **string**|  | [optional]
 **end_user_origin_ids** | **string**| Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once | [optional]
 **id** | [**string**](../Model/.md)|  | [optional]
 **ids** | **string**| Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once | [optional]
 **integration_name** | **string**|  | [optional]
 **is_test_account** | **string**| If included, will only include test linked accounts. If not included, will only include non-test linked accounts | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **status** | **string**| Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList**](../Model/PaginatedAccountDetailsAndActionsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
