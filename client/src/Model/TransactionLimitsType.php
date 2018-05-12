<?php
/**
 * TransactionLimitsType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Semux\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Semux API
 *
 * Semux is an experimental high-performance blockchain platform that powers decentralized application.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Semux\Client\Model;

use \ArrayAccess;
use \Semux\Client\ObjectSerializer;

/**
 * TransactionLimitsType Class Doc Comment
 *
 * @category Class
 * @package  Semux\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionLimitsType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionLimitsType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'maxTransactionDataSize' => 'int',
        'minTransactionFee' => 'string',
        'minDelegateBurnAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'maxTransactionDataSize' => 'int32',
        'minTransactionFee' => 'int64',
        'minDelegateBurnAmount' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'maxTransactionDataSize' => 'maxTransactionDataSize',
        'minTransactionFee' => 'minTransactionFee',
        'minDelegateBurnAmount' => 'minDelegateBurnAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maxTransactionDataSize' => 'setMaxTransactionDataSize',
        'minTransactionFee' => 'setMinTransactionFee',
        'minDelegateBurnAmount' => 'setMinDelegateBurnAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maxTransactionDataSize' => 'getMaxTransactionDataSize',
        'minTransactionFee' => 'getMinTransactionFee',
        'minDelegateBurnAmount' => 'getMinDelegateBurnAmount'
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
        return self::$swaggerModelName;
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
        $this->container['maxTransactionDataSize'] = isset($data['maxTransactionDataSize']) ? $data['maxTransactionDataSize'] : null;
        $this->container['minTransactionFee'] = isset($data['minTransactionFee']) ? $data['minTransactionFee'] : null;
        $this->container['minDelegateBurnAmount'] = isset($data['minDelegateBurnAmount']) ? $data['minDelegateBurnAmount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['minTransactionFee']) && !preg_match("/^\\d+$/", $this->container['minTransactionFee'])) {
            $invalidProperties[] = "invalid value for 'minTransactionFee', must be conform to the pattern /^\\d+$/.";
        }

        if (!is_null($this->container['minDelegateBurnAmount']) && !preg_match("/^\\d+$/", $this->container['minDelegateBurnAmount'])) {
            $invalidProperties[] = "invalid value for 'minDelegateBurnAmount', must be conform to the pattern /^\\d+$/.";
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

        if (!preg_match("/^\\d+$/", $this->container['minTransactionFee'])) {
            return false;
        }
        if (!preg_match("/^\\d+$/", $this->container['minDelegateBurnAmount'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets maxTransactionDataSize
     *
     * @return int
     */
    public function getMaxTransactionDataSize()
    {
        return $this->container['maxTransactionDataSize'];
    }

    /**
     * Sets maxTransactionDataSize
     *
     * @param int $maxTransactionDataSize The maximum transaction size in bytes
     *
     * @return $this
     */
    public function setMaxTransactionDataSize($maxTransactionDataSize)
    {
        $this->container['maxTransactionDataSize'] = $maxTransactionDataSize;

        return $this;
    }

    /**
     * Gets minTransactionFee
     *
     * @return string
     */
    public function getMinTransactionFee()
    {
        return $this->container['minTransactionFee'];
    }

    /**
     * Sets minTransactionFee
     *
     * @param string $minTransactionFee The minimum transaction fee in nano SEM
     *
     * @return $this
     */
    public function setMinTransactionFee($minTransactionFee)
    {

        if (!is_null($minTransactionFee) && (!preg_match("/^\\d+$/", $minTransactionFee))) {
            throw new \InvalidArgumentException("invalid value for $minTransactionFee when calling TransactionLimitsType., must conform to the pattern /^\\d+$/.");
        }

        $this->container['minTransactionFee'] = $minTransactionFee;

        return $this;
    }

    /**
     * Gets minDelegateBurnAmount
     *
     * @return string
     */
    public function getMinDelegateBurnAmount()
    {
        return $this->container['minDelegateBurnAmount'];
    }

    /**
     * Sets minDelegateBurnAmount
     *
     * @param string $minDelegateBurnAmount The amount of nano SEM required to burn for delegate registration
     *
     * @return $this
     */
    public function setMinDelegateBurnAmount($minDelegateBurnAmount)
    {

        if (!is_null($minDelegateBurnAmount) && (!preg_match("/^\\d+$/", $minDelegateBurnAmount))) {
            throw new \InvalidArgumentException("invalid value for $minDelegateBurnAmount when calling TransactionLimitsType., must conform to the pattern /^\\d+$/.");
        }

        $this->container['minDelegateBurnAmount'] = $minDelegateBurnAmount;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


