<?php


namespace FicoscorePeru\Client\Model;

use \ArrayAccess;
use \FicoscorePeru\Client\ObjectSerializer;


class Reason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

   
    protected static $apihubModelName = 'Reason';

    protected static $apihubTypes = [
        'clave' => 'string',
        'descripcion' => 'string'
    ];

 
    protected static $apihubFormats = [
        'clave' => null,
        'descripcion' => null
    ];


    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }


    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }


    protected static $attributeMap = [
        'clave' => 'clave',
        'descripcion' => 'descripcion'
    ];


    protected static $setters = [
        'clave' => 'setClave',
        'descripcion' => 'setDescripcion'
    ];

    protected static $getters = [
        'clave' => 'getClave',
        'descripcion' => 'getDescripcion'
    ];


    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }


    public static function getters()
    {
        return self::$getters;
    }

    public function getModelName()
    {
        return self::$apihubModelName;
    }

    const CLAVE_A1 = 'A1';
    const CLAVE_A3 = 'A3';
    const CLAVE_C1 = 'C1';
    const CLAVE_C2 = 'C2';
    const CLAVE_C4 = 'C4';
    const CLAVE_C6 = 'C6';
    const CLAVE_C7 = 'C7';
    const CLAVE_D2 = 'D2';
    const CLAVE_D8 = 'D8';
    const CLAVE_E0 = 'E0';
    const CLAVE_E1 = 'E1';
    const CLAVE_E4 = 'E4';
    const CLAVE_F1 = 'F1';
    const CLAVE_F7 = 'F7';
    const CLAVE_F8 = 'F8';
    const CLAVE_G1 = 'G1';
    const CLAVE_G2 = 'G2';
    const CLAVE_J0 = 'J0';
    const CLAVE_K0 = 'K0';
    const CLAVE_K2 = 'K2';
    const CLAVE_M1 = 'M1';
    const CLAVE_M5 = 'M5';
    const CLAVE_N3 = 'N3';
    const CLAVE_P6 = 'P6';
    const CLAVE_P9 = 'P9';
    const CLAVE_Q0 = 'Q0';
    const CLAVE_R0 = 'R0';
    const CLAVE_R2 = 'R2';
    const CLAVE_R3 = 'R3';
    const CLAVE_SC = 'SC';
    const CLAVE_T0 = 'T0';
    const CLAVE_T1 = 'T1';
    const CLAVE_T4 = 'T4';
    const CLAVE_U7 = 'U7';
    const CLAVE_V3 = 'V3';
    const CLAVE_Z3 = 'Z3';
    


    public function getClaveAllowableValues()
    {
        return [
            self::CLAVE_A1,
            self::CLAVE_A3,
            self::CLAVE_C1,
            self::CLAVE_C2,
            self::CLAVE_C4,
            self::CLAVE_C6,
            self::CLAVE_C7,
            self::CLAVE_D2,
            self::CLAVE_D8,
            self::CLAVE_E0,
            self::CLAVE_E1,
            self::CLAVE_E4,
            self::CLAVE_F1,
            self::CLAVE_F7,
            self::CLAVE_F8,
            self::CLAVE_G1,
            self::CLAVE_G2,
            self::CLAVE_J0,
            self::CLAVE_K0,
            self::CLAVE_K2,
            self::CLAVE_M1,
            self::CLAVE_M5,
            self::CLAVE_N3,
            self::CLAVE_P6,
            self::CLAVE_P9,
            self::CLAVE_Q0,
            self::CLAVE_R0,
            self::CLAVE_R2,
            self::CLAVE_R3,
            self::CLAVE_SC,
            self::CLAVE_T0,
            self::CLAVE_T1,
            self::CLAVE_T4,
            self::CLAVE_U7,
            self::CLAVE_V3,
            self::CLAVE_Z3,
        ];
    }
    


    protected $container = [];


    public function __construct(array $data = null)
    {
        $this->container['clave'] = isset($data['clave']) ? $data['clave'] : null;
        $this->container['descripcion'] = isset($data['descripcion']) ? $data['descripcion'] : null;
    }


    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['clave'] === null) {
            $invalidProperties[] = "'clave' can't be null";
        }
        $allowedValues = $this->getClaveAllowableValues();
        if (!is_null($this->container['clave']) && !in_array($this->container['clave'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'clave', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['clave']) > 2)) {
            $invalidProperties[] = "invalid value for 'clave', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['clave']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['descripcion'] === null) {
            $invalidProperties[] = "'descripcion' can't be null";
        }
        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }



    public function getClave()
    {
        return $this->container['clave'];
    }


    public function setClave($clave)
    {
        $allowedValues = $this->getClaveAllowableValues();
        if (!in_array($clave, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'clave', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($clave) > 2)) {
            throw new \InvalidArgumentException('invalid length for $clave when calling Reason., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($clave) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave when calling Reason., must be bigger than or equal to 0.');
        }

        $this->container['clave'] = $clave;

        return $this;
    }

 
    public function getDescripcion()
    {
        return $this->container['descripcion'];
    }

 
    public function setDescripcion($descripcion)
    {
        $this->container['descripcion'] = $descripcion;

        return $this;
    }
  
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }


    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }


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


