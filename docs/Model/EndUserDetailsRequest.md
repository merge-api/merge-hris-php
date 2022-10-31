# # EndUserDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_user_email_address** | **string** | Your end user&#39;s email address. This is purely for identification purposes - setting this value will not cause any emails to be sent. |
**end_user_organization_name** | **string** | Your end user&#39;s organization. |
**end_user_origin_id** | **string** | This unique identifier typically represents the ID for your end user in your product&#39;s database. This value must be distinct from other Linked Accounts&#39; unique identifiers. |
**categories** | [**\MergeHRISClient\Model\CategoriesEnum[]**](CategoriesEnum.md) | The integration categories to show in Merge Link. |
**integration** | **string** | The slug of a specific pre-selected integration for this linking flow token. For examples of slugs, see https://www.merge.dev/docs/basics/integration-metadata/. | [optional]
**link_expiry_mins** | **int** | An integer number of minutes between [30, 720 or 10080 if for a Magic Link URL] for how long this token is valid. Defaults to 30. | [optional] [default to 30]
**should_create_magic_link_url** | **bool** | Whether to generate a Magic Link URL. Defaults to false. For more information on Magic Link, see https://merge.dev/blog/product/integrations,-fast.-say-hello-to-magic-link/. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
