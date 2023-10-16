# BeLenka\Helios\Auth\AutentizaceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiStatusGet()**](AutentizaceApi.md#apiStatusGet) | **GET** /api/status | Stav autentizačního serveru |
| [**apiTokenDelete()**](AutentizaceApi.md#apiTokenDelete) | **DELETE** /api/token | Zneplatnění tokenu (a likvidace Runtime relace) |
| [**apiTokenGet()**](AutentizaceApi.md#apiTokenGet) | **GET** /api/token | Prodloužení expirace tokenu |
| [**apiTokenPost()**](AutentizaceApi.md#apiTokenPost) | **POST** /api/token | Vytvoření nového tokenu (a Runtime relace) |


## `apiStatusGet()`

```php
apiStatusGet(): \BeLenka\Helios\Auth\Model\StatusResult
```

Stav autentizačního serveru

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BeLenka\Helios\Auth\Api\AutentizaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutentizaceApi->apiStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BeLenka\Helios\Auth\Model\StatusResult**](../Model/StatusResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTokenDelete()`

```php
apiTokenDelete(): string
```

Zneplatnění tokenu (a likvidace Runtime relace)

Explicitně ukončí relaci Runtime a zneplatní autentikační token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Auth\Api\AutentizaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiTokenDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutentizaceApi->apiTokenDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTokenGet()`

```php
apiTokenGet(): \BeLenka\Helios\Auth\Model\TokenRefreshResult
```

Prodloužení expirace tokenu

Vydá nový token s novou expirací. Runtime relace zůstane zachována.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Auth\Api\AutentizaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiTokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutentizaceApi->apiTokenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BeLenka\Helios\Auth\Model\TokenRefreshResult**](../Model/TokenRefreshResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTokenPost()`

```php
apiTokenPost($token_body): \BeLenka\Helios\Auth\Model\TokenResult
```

Vytvoření nového tokenu (a Runtime relace)

Funkce pro vytvoření relace / Runtime serveru. Před voláním dalších funkcí API je nutné vytvořit relaci / Runtime server a získat autentikační token který se následně používá k autentikaci volání.  Jednou vytvořená relace existuje až do jejího uzavření metodou DELETE token nebo do vypršení časového limitu relace / tokenu. Ten se nastavuje v administračním rozhraní serveru (Session Timeout). Platnost tokenu je možné obnovit metodou GET /token.    Při vytváření relace /tokenu se spouští samostatná instance Runtime serveru jádra iNuvio. Latence této operace je řádově vteřiny (4-5 s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BeLenka\Helios\Auth\Api\AutentizaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_body = new \BeLenka\Helios\Auth\Model\TokenBody(); // \BeLenka\Helios\Auth\Model\TokenBody | Autentizační informace.

try {
    $result = $apiInstance->apiTokenPost($token_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutentizaceApi->apiTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_body** | [**\BeLenka\Helios\Auth\Model\TokenBody**](../Model/TokenBody.md)| Autentizační informace. | |

### Return type

[**\BeLenka\Helios\Auth\Model\TokenResult**](../Model/TokenResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
