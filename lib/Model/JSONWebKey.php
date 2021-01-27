<?php
/**
 * JSONWebKey
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ory\Hydra\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * The version of the OpenAPI document: v1.9.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Hydra\Client\Model;

use \ArrayAccess;
use \Ory\Hydra\Client\ObjectSerializer;

/**
 * JSONWebKey Class Doc Comment
 *
 * @category Class
 * @description It is important that this model object is named JSONWebKey for \&quot;swagger generate spec\&quot; to generate only on definition of a JSONWebKey.
 * @package  Ory\Hydra\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class JSONWebKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JSONWebKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alg' => 'string',
        'crv' => 'string',
        'd' => 'string',
        'dp' => 'string',
        'dq' => 'string',
        'e' => 'string',
        'k' => 'string',
        'kid' => 'string',
        'kty' => 'string',
        'n' => 'string',
        'p' => 'string',
        'q' => 'string',
        'qi' => 'string',
        'use' => 'string',
        'x' => 'string',
        'x5c' => 'string[]',
        'y' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alg' => null,
        'crv' => null,
        'd' => null,
        'dp' => null,
        'dq' => null,
        'e' => null,
        'k' => null,
        'kid' => null,
        'kty' => null,
        'n' => null,
        'p' => null,
        'q' => null,
        'qi' => null,
        'use' => null,
        'x' => null,
        'x5c' => null,
        'y' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alg' => 'alg',
        'crv' => 'crv',
        'd' => 'd',
        'dp' => 'dp',
        'dq' => 'dq',
        'e' => 'e',
        'k' => 'k',
        'kid' => 'kid',
        'kty' => 'kty',
        'n' => 'n',
        'p' => 'p',
        'q' => 'q',
        'qi' => 'qi',
        'use' => 'use',
        'x' => 'x',
        'x5c' => 'x5c',
        'y' => 'y'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alg' => 'setAlg',
        'crv' => 'setCrv',
        'd' => 'setD',
        'dp' => 'setDp',
        'dq' => 'setDq',
        'e' => 'setE',
        'k' => 'setK',
        'kid' => 'setKid',
        'kty' => 'setKty',
        'n' => 'setN',
        'p' => 'setP',
        'q' => 'setQ',
        'qi' => 'setQi',
        'use' => 'setUse',
        'x' => 'setX',
        'x5c' => 'setX5c',
        'y' => 'setY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alg' => 'getAlg',
        'crv' => 'getCrv',
        'd' => 'getD',
        'dp' => 'getDp',
        'dq' => 'getDq',
        'e' => 'getE',
        'k' => 'getK',
        'kid' => 'getKid',
        'kty' => 'getKty',
        'n' => 'getN',
        'p' => 'getP',
        'q' => 'getQ',
        'qi' => 'getQi',
        'use' => 'getUse',
        'x' => 'getX',
        'x5c' => 'getX5c',
        'y' => 'getY'
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
        $this->container['alg'] = $data['alg'] ?? null;
        $this->container['crv'] = $data['crv'] ?? null;
        $this->container['d'] = $data['d'] ?? null;
        $this->container['dp'] = $data['dp'] ?? null;
        $this->container['dq'] = $data['dq'] ?? null;
        $this->container['e'] = $data['e'] ?? null;
        $this->container['k'] = $data['k'] ?? null;
        $this->container['kid'] = $data['kid'] ?? null;
        $this->container['kty'] = $data['kty'] ?? null;
        $this->container['n'] = $data['n'] ?? null;
        $this->container['p'] = $data['p'] ?? null;
        $this->container['q'] = $data['q'] ?? null;
        $this->container['qi'] = $data['qi'] ?? null;
        $this->container['use'] = $data['use'] ?? null;
        $this->container['x'] = $data['x'] ?? null;
        $this->container['x5c'] = $data['x5c'] ?? null;
        $this->container['y'] = $data['y'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['alg'] === null) {
            $invalidProperties[] = "'alg' can't be null";
        }
        if ($this->container['kid'] === null) {
            $invalidProperties[] = "'kid' can't be null";
        }
        if ($this->container['kty'] === null) {
            $invalidProperties[] = "'kty' can't be null";
        }
        if ($this->container['use'] === null) {
            $invalidProperties[] = "'use' can't be null";
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
     * Gets alg
     *
     * @return string
     */
    public function getAlg()
    {
        return $this->container['alg'];
    }

    /**
     * Sets alg
     *
     * @param string $alg The \"alg\" (algorithm) parameter identifies the algorithm intended for use with the key.  The values used should either be registered in the IANA \"JSON Web Signature and Encryption Algorithms\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.
     *
     * @return self
     */
    public function setAlg($alg)
    {
        $this->container['alg'] = $alg;

        return $this;
    }

    /**
     * Gets crv
     *
     * @return string|null
     */
    public function getCrv()
    {
        return $this->container['crv'];
    }

    /**
     * Sets crv
     *
     * @param string|null $crv crv
     *
     * @return self
     */
    public function setCrv($crv)
    {
        $this->container['crv'] = $crv;

        return $this;
    }

    /**
     * Gets d
     *
     * @return string|null
     */
    public function getD()
    {
        return $this->container['d'];
    }

    /**
     * Sets d
     *
     * @param string|null $d d
     *
     * @return self
     */
    public function setD($d)
    {
        $this->container['d'] = $d;

        return $this;
    }

    /**
     * Gets dp
     *
     * @return string|null
     */
    public function getDp()
    {
        return $this->container['dp'];
    }

    /**
     * Sets dp
     *
     * @param string|null $dp dp
     *
     * @return self
     */
    public function setDp($dp)
    {
        $this->container['dp'] = $dp;

        return $this;
    }

    /**
     * Gets dq
     *
     * @return string|null
     */
    public function getDq()
    {
        return $this->container['dq'];
    }

    /**
     * Sets dq
     *
     * @param string|null $dq dq
     *
     * @return self
     */
    public function setDq($dq)
    {
        $this->container['dq'] = $dq;

        return $this;
    }

    /**
     * Gets e
     *
     * @return string|null
     */
    public function getE()
    {
        return $this->container['e'];
    }

    /**
     * Sets e
     *
     * @param string|null $e e
     *
     * @return self
     */
    public function setE($e)
    {
        $this->container['e'] = $e;

        return $this;
    }

    /**
     * Gets k
     *
     * @return string|null
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     *
     * @param string|null $k k
     *
     * @return self
     */
    public function setK($k)
    {
        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets kid
     *
     * @return string
     */
    public function getKid()
    {
        return $this->container['kid'];
    }

    /**
     * Sets kid
     *
     * @param string $kid The \"kid\" (key ID) parameter is used to match a specific key.  This is used, for instance, to choose among a set of keys within a JWK Set during key rollover.  The structure of the \"kid\" value is unspecified.  When \"kid\" values are used within a JWK Set, different keys within the JWK Set SHOULD use distinct \"kid\" values.  (One example in which different keys might use the same \"kid\" value is if they have different \"kty\" (key type) values but are considered to be equivalent alternatives by the application using them.)  The \"kid\" value is a case-sensitive string.
     *
     * @return self
     */
    public function setKid($kid)
    {
        $this->container['kid'] = $kid;

        return $this;
    }

    /**
     * Gets kty
     *
     * @return string
     */
    public function getKty()
    {
        return $this->container['kty'];
    }

    /**
     * Sets kty
     *
     * @param string $kty The \"kty\" (key type) parameter identifies the cryptographic algorithm family used with the key, such as \"RSA\" or \"EC\". \"kty\" values should either be registered in the IANA \"JSON Web Key Types\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.  The \"kty\" value is a case-sensitive string.
     *
     * @return self
     */
    public function setKty($kty)
    {
        $this->container['kty'] = $kty;

        return $this;
    }

    /**
     * Gets n
     *
     * @return string|null
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param string|null $n n
     *
     * @return self
     */
    public function setN($n)
    {
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets p
     *
     * @return string|null
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param string|null $p p
     *
     * @return self
     */
    public function setP($p)
    {
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets q
     *
     * @return string|null
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     *
     * @param string|null $q q
     *
     * @return self
     */
    public function setQ($q)
    {
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets qi
     *
     * @return string|null
     */
    public function getQi()
    {
        return $this->container['qi'];
    }

    /**
     * Sets qi
     *
     * @param string|null $qi qi
     *
     * @return self
     */
    public function setQi($qi)
    {
        $this->container['qi'] = $qi;

        return $this;
    }

    /**
     * Gets use
     *
     * @return string
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     *
     * @param string $use Use (\"public key use\") identifies the intended use of the public key. The \"use\" parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Values are commonly \"sig\" (signature) or \"enc\" (encryption).
     *
     * @return self
     */
    public function setUse($use)
    {
        $this->container['use'] = $use;

        return $this;
    }

    /**
     * Gets x
     *
     * @return string|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param string|null $x x
     *
     * @return self
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets x5c
     *
     * @return string[]|null
     */
    public function getX5c()
    {
        return $this->container['x5c'];
    }

    /**
     * Sets x5c
     *
     * @param string[]|null $x5c The \"x5c\" (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates [RFC5280].  The certificate chain is represented as a JSON array of certificate value strings.  Each string in the array is a base64-encoded (Section 4 of [RFC4648] -- not base64url-encoded) DER [ITU.X690.1994] PKIX certificate value. The PKIX certificate containing the key value MUST be the first certificate.
     *
     * @return self
     */
    public function setX5c($x5c)
    {
        $this->container['x5c'] = $x5c;

        return $this;
    }

    /**
     * Gets y
     *
     * @return string|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param string|null $y y
     *
     * @return self
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


