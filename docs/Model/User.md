# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_ip_address_masks** | **string[]** | A list of IP addresses whitelisted for any user with API Access permission.  Without this list, each ip address must be authenticated by a user, which can be a pain for some servers. | [optional] 
**change_ftp_password_to** | **string** | Supply a new FTP password using this field.  Password are stored using one-way encryption, so they are never available anywhere in the system.  The FTP password cannot be the same as the normal password. | [optional] 
**change_password_to** | **string** | Supply a new password using this field.  Password are stored using one-way encryption, so they are never available anywhere in the system. | [optional] 
**email** | **string** | Email address of user | [optional] 
**full_name** | **string** | Full name of user.  This is used solely for human assistance and so the UltraCart staff knows who they are calling when there is a problem. | [optional] 
**groups** | [**\ultracart\v2\models\UserGroupMembership[]**](UserGroupMembership.md) | A list of groups for this merchant and whether or not this user is a member of those groups. | [optional] 
**linked_accounts** | [**\ultracart\v2\models\LinkedAccount[]**](LinkedAccount.md) | A list of linked accounts and whether or not this user is mirrored to any of those accounts. | [optional] 
**login** | **string** | User name of user.  Must be unique across a merchant account. | [optional] 
**login_histories** | [**\ultracart\v2\models\UserLogin[]**](UserLogin.md) | A list of user logins over the past 90 days | [optional] 
**notifications** | [**\ultracart\v2\models\Notification[]**](Notification.md) | A list of notifications the user receives. | [optional] 
**otp_serial_number** | **string** | OTP Serial Number such as Google Authenticator or Crypto Card. | [optional] 
**permissions** | [**\ultracart\v2\models\Permission[]**](Permission.md) | A list of permissions the user enjoys for accessing the backend of UltraCart. | [optional] 
**phone** | **string** | Phone number of user.  Please supply a valid phone number.  When something breaks on your account, we need to be able to reach you. | [optional] 
**user_id** | **int** | User id is a unique identifier for this user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


