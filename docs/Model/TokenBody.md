# # TokenBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | Přihlašovací jméno. V případě doménového přihlašování je třeba použít „domena\\\\username“. |
**password** | **string** | Přihlašovací heslo. |
**windows_authentication** | **bool** | Režim ověření uživatele: false - SQL autentikace, true - NT autentikace (shodné s LoginMode&#x3D;0/2 v Helios.INI) |
**client_id** | **string** | Podpis klientské aplikace pro ověření licence. | [optional]
**app_role_enabled** | **bool** | Zapnutí režimu aplikační role. | [optional]
**app_role_db_name** | **string** | Vyžadovaná databáze pro řežim aplikační role. | [optional]
**eshop_db_name** | **string** | Databáze pro eShop API. | [optional]
**notif_platform** | **string** | Plaforma na které klient běží. | [optional]
**notif_device_token** | **string** | Unikátní identifikátor zařízení a aplikace pro účely push-notifikace. | [optional]
**notif_device_id** | **string** | Unikátní identifikátor zařízení. | [optional]
**remote_hash** | **string** | Doplňkový parametr pro připojení k existujícímu Runtime serveru. | [optional]
**remote_host** | **string** | Doplňkový parametr pro připojení k existujícímu Runtime serveru. | [optional]
**remote_port** | **string** | Doplňkový parametr pro připojení k existujícímu Runtime serveru. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
