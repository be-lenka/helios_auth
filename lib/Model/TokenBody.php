<?php
/**
 * TokenBody
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\Helios\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * iNuvio Server Auth API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.2.33
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\Helios\Auth\Model;

use \ArrayAccess;
use \BeLenka\Helios\Auth\ObjectSerializer;

/**
 * TokenBody Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\Helios\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TokenBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tokenBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'username' => 'string',
        'password' => 'string',
        'windows_authentication' => 'bool',
        'client_id' => 'string',
        'app_role_enabled' => 'bool',
        'app_role_db_name' => 'string',
        'eshop_db_name' => 'string',
        'notif_platform' => 'string',
        'notif_device_token' => 'string',
        'notif_device_id' => 'string',
        'remote_hash' => 'string',
        'remote_host' => 'string',
        'remote_port' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'username' => null,
        'password' => null,
        'windows_authentication' => null,
        'client_id' => null,
        'app_role_enabled' => null,
        'app_role_db_name' => null,
        'eshop_db_name' => null,
        'notif_platform' => null,
        'notif_device_token' => null,
        'notif_device_id' => null,
        'remote_hash' => null,
        'remote_host' => null,
        'remote_port' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'username' => false,
		'password' => false,
		'windows_authentication' => false,
		'client_id' => false,
		'app_role_enabled' => false,
		'app_role_db_name' => false,
		'eshop_db_name' => false,
		'notif_platform' => false,
		'notif_device_token' => false,
		'notif_device_id' => false,
		'remote_hash' => false,
		'remote_host' => false,
		'remote_port' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'username' => 'username',
        'password' => 'password',
        'windows_authentication' => 'windowsAuthentication',
        'client_id' => 'clientId',
        'app_role_enabled' => 'appRoleEnabled',
        'app_role_db_name' => 'appRoleDbName',
        'eshop_db_name' => 'eshopDbName',
        'notif_platform' => 'notifPlatform',
        'notif_device_token' => 'notifDeviceToken',
        'notif_device_id' => 'notifDeviceID',
        'remote_hash' => 'remoteHash',
        'remote_host' => 'remoteHost',
        'remote_port' => 'remotePort'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'password' => 'setPassword',
        'windows_authentication' => 'setWindowsAuthentication',
        'client_id' => 'setClientId',
        'app_role_enabled' => 'setAppRoleEnabled',
        'app_role_db_name' => 'setAppRoleDbName',
        'eshop_db_name' => 'setEshopDbName',
        'notif_platform' => 'setNotifPlatform',
        'notif_device_token' => 'setNotifDeviceToken',
        'notif_device_id' => 'setNotifDeviceId',
        'remote_hash' => 'setRemoteHash',
        'remote_host' => 'setRemoteHost',
        'remote_port' => 'setRemotePort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'password' => 'getPassword',
        'windows_authentication' => 'getWindowsAuthentication',
        'client_id' => 'getClientId',
        'app_role_enabled' => 'getAppRoleEnabled',
        'app_role_db_name' => 'getAppRoleDbName',
        'eshop_db_name' => 'getEshopDbName',
        'notif_platform' => 'getNotifPlatform',
        'notif_device_token' => 'getNotifDeviceToken',
        'notif_device_id' => 'getNotifDeviceId',
        'remote_hash' => 'getRemoteHash',
        'remote_host' => 'getRemoteHost',
        'remote_port' => 'getRemotePort'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const NOTIF_PLATFORM_PF_WINDOWS = 'pfWindows';
    public const NOTIF_PLATFORM_PF_MAC_OS = 'pfMacOS';
    public const NOTIF_PLATFORM_PFI_OS = 'pfiOS';
    public const NOTIF_PLATFORM_PF_ANDROID = 'pfAndroid';
    public const NOTIF_PLATFORM_PF_WIN_RT = 'pfWinRT';
    public const NOTIF_PLATFORM_PF_LINUX = 'pfLinux';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotifPlatformAllowableValues()
    {
        return [
            self::NOTIF_PLATFORM_PF_WINDOWS,
            self::NOTIF_PLATFORM_PF_MAC_OS,
            self::NOTIF_PLATFORM_PFI_OS,
            self::NOTIF_PLATFORM_PF_ANDROID,
            self::NOTIF_PLATFORM_PF_WIN_RT,
            self::NOTIF_PLATFORM_PF_LINUX,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('windows_authentication', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('app_role_enabled', $data ?? [], null);
        $this->setIfExists('app_role_db_name', $data ?? [], null);
        $this->setIfExists('eshop_db_name', $data ?? [], null);
        $this->setIfExists('notif_platform', $data ?? [], null);
        $this->setIfExists('notif_device_token', $data ?? [], null);
        $this->setIfExists('notif_device_id', $data ?? [], null);
        $this->setIfExists('remote_hash', $data ?? [], null);
        $this->setIfExists('remote_host', $data ?? [], null);
        $this->setIfExists('remote_port', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['windows_authentication'] === null) {
            $invalidProperties[] = "'windows_authentication' can't be null";
        }
        $allowedValues = $this->getNotifPlatformAllowableValues();
        if (!is_null($this->container['notif_platform']) && !in_array($this->container['notif_platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'notif_platform', must be one of '%s'",
                $this->container['notif_platform'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Přihlašovací jméno. V případě doménového přihlašování je třeba použít „domena\\\\username“.
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Přihlašovací heslo.
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets windows_authentication
     *
     * @return bool
     */
    public function getWindowsAuthentication()
    {
        return $this->container['windows_authentication'];
    }

    /**
     * Sets windows_authentication
     *
     * @param bool $windows_authentication Režim ověření uživatele: false - SQL autentikace, true - NT autentikace (shodné s LoginMode=0/2 v Helios.INI)
     *
     * @return self
     */
    public function setWindowsAuthentication($windows_authentication)
    {
        if (is_null($windows_authentication)) {
            throw new \InvalidArgumentException('non-nullable windows_authentication cannot be null');
        }
        $this->container['windows_authentication'] = $windows_authentication;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id Podpis klientské aplikace pro ověření licence.
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets app_role_enabled
     *
     * @return bool|null
     */
    public function getAppRoleEnabled()
    {
        return $this->container['app_role_enabled'];
    }

    /**
     * Sets app_role_enabled
     *
     * @param bool|null $app_role_enabled Zapnutí režimu aplikační role.
     *
     * @return self
     */
    public function setAppRoleEnabled($app_role_enabled)
    {
        if (is_null($app_role_enabled)) {
            throw new \InvalidArgumentException('non-nullable app_role_enabled cannot be null');
        }
        $this->container['app_role_enabled'] = $app_role_enabled;

        return $this;
    }

    /**
     * Gets app_role_db_name
     *
     * @return string|null
     */
    public function getAppRoleDbName()
    {
        return $this->container['app_role_db_name'];
    }

    /**
     * Sets app_role_db_name
     *
     * @param string|null $app_role_db_name Vyžadovaná databáze pro řežim aplikační role.
     *
     * @return self
     */
    public function setAppRoleDbName($app_role_db_name)
    {
        if (is_null($app_role_db_name)) {
            throw new \InvalidArgumentException('non-nullable app_role_db_name cannot be null');
        }
        $this->container['app_role_db_name'] = $app_role_db_name;

        return $this;
    }

    /**
     * Gets eshop_db_name
     *
     * @return string|null
     */
    public function getEshopDbName()
    {
        return $this->container['eshop_db_name'];
    }

    /**
     * Sets eshop_db_name
     *
     * @param string|null $eshop_db_name Databáze pro eShop API.
     *
     * @return self
     */
    public function setEshopDbName($eshop_db_name)
    {
        if (is_null($eshop_db_name)) {
            throw new \InvalidArgumentException('non-nullable eshop_db_name cannot be null');
        }
        $this->container['eshop_db_name'] = $eshop_db_name;

        return $this;
    }

    /**
     * Gets notif_platform
     *
     * @return string|null
     */
    public function getNotifPlatform()
    {
        return $this->container['notif_platform'];
    }

    /**
     * Sets notif_platform
     *
     * @param string|null $notif_platform Plaforma na které klient běží.
     *
     * @return self
     */
    public function setNotifPlatform($notif_platform)
    {
        if (is_null($notif_platform)) {
            throw new \InvalidArgumentException('non-nullable notif_platform cannot be null');
        }
        $allowedValues = $this->getNotifPlatformAllowableValues();
        if (!in_array($notif_platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'notif_platform', must be one of '%s'",
                    $notif_platform,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notif_platform'] = $notif_platform;

        return $this;
    }

    /**
     * Gets notif_device_token
     *
     * @return string|null
     */
    public function getNotifDeviceToken()
    {
        return $this->container['notif_device_token'];
    }

    /**
     * Sets notif_device_token
     *
     * @param string|null $notif_device_token Unikátní identifikátor zařízení a aplikace pro účely push-notifikace.
     *
     * @return self
     */
    public function setNotifDeviceToken($notif_device_token)
    {
        if (is_null($notif_device_token)) {
            throw new \InvalidArgumentException('non-nullable notif_device_token cannot be null');
        }
        $this->container['notif_device_token'] = $notif_device_token;

        return $this;
    }

    /**
     * Gets notif_device_id
     *
     * @return string|null
     */
    public function getNotifDeviceId()
    {
        return $this->container['notif_device_id'];
    }

    /**
     * Sets notif_device_id
     *
     * @param string|null $notif_device_id Unikátní identifikátor zařízení.
     *
     * @return self
     */
    public function setNotifDeviceId($notif_device_id)
    {
        if (is_null($notif_device_id)) {
            throw new \InvalidArgumentException('non-nullable notif_device_id cannot be null');
        }
        $this->container['notif_device_id'] = $notif_device_id;

        return $this;
    }

    /**
     * Gets remote_hash
     *
     * @return string|null
     */
    public function getRemoteHash()
    {
        return $this->container['remote_hash'];
    }

    /**
     * Sets remote_hash
     *
     * @param string|null $remote_hash Doplňkový parametr pro připojení k existujícímu Runtime serveru.
     *
     * @return self
     */
    public function setRemoteHash($remote_hash)
    {
        if (is_null($remote_hash)) {
            throw new \InvalidArgumentException('non-nullable remote_hash cannot be null');
        }
        $this->container['remote_hash'] = $remote_hash;

        return $this;
    }

    /**
     * Gets remote_host
     *
     * @return string|null
     */
    public function getRemoteHost()
    {
        return $this->container['remote_host'];
    }

    /**
     * Sets remote_host
     *
     * @param string|null $remote_host Doplňkový parametr pro připojení k existujícímu Runtime serveru.
     *
     * @return self
     */
    public function setRemoteHost($remote_host)
    {
        if (is_null($remote_host)) {
            throw new \InvalidArgumentException('non-nullable remote_host cannot be null');
        }
        $this->container['remote_host'] = $remote_host;

        return $this;
    }

    /**
     * Gets remote_port
     *
     * @return string|null
     */
    public function getRemotePort()
    {
        return $this->container['remote_port'];
    }

    /**
     * Sets remote_port
     *
     * @param string|null $remote_port Doplňkový parametr pro připojení k existujícímu Runtime serveru.
     *
     * @return self
     */
    public function setRemotePort($remote_port)
    {
        if (is_null($remote_port)) {
            throw new \InvalidArgumentException('non-nullable remote_port cannot be null');
        }
        $this->container['remote_port'] = $remote_port;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

