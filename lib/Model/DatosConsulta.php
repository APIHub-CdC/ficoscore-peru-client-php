<?php

namespace FicoscorePeru\Client\Model;

use \ArrayAccess;
use \FicoscorePeru\Client\ObjectSerializer;

class DatosConsulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'DatosConsulta';
    
    protected static $apihubTypes = [
        'numero_documento' => 'string',
        'tipo_documento' => 'string',
        'folio_consulta_otorgante' => 'string'
    ];
    
    protected static $apihubFormats = [
        'numero_documento' => null,
        'tipo_documento' => null,
        'folio_consulta_otorgante' => null
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
        'numero_documento' => 'numeroDocumento',
        'tipo_documento' => 'tipoDocumento',
        'folio_consulta_otorgante' => 'folioConsultaOtorgante'
    ];
    
    protected static $setters = [
        'numero_documento' => 'setNumeroDocumento',
        'tipo_documento' => 'setTipoDocumento',
        'folio_consulta_otorgante' => 'setFolioConsultaOtorgante'
    ];
    
    protected static $getters = [
        'numero_documento' => 'getNumeroDocumento',
        'tipo_documento' => 'getTipoDocumento',
        'folio_consulta_otorgante' => 'getFolioConsultaOtorgante'
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
    const TIPO_DOCUMENTO__1 = '1';
    const TIPO_DOCUMENTO__2 = '2';
    const TIPO_DOCUMENTO__10 = '10';
    
    
    
    public function getTipoDocumentoAllowableValues()
    {
        return [
            self::TIPO_DOCUMENTO__1,
            self::TIPO_DOCUMENTO__2,
            self::TIPO_DOCUMENTO__10,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['folio_consulta_otorgante'] = isset($data['folio_consulta_otorgante']) ? $data['folio_consulta_otorgante'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['numero_documento'] === null) {
            $invalidProperties[] = "'numero_documento' can't be null";
        }
        if ($this->container['tipo_documento'] === null) {
            $invalidProperties[] = "'tipo_documento' can't be null";
        }
        $allowedValues = $this->getTipoDocumentoAllowableValues();
        if (!is_null($this->container['tipo_documento']) && !in_array($this->container['tipo_documento'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tipo_documento', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        $allowedValues = $this->getTipoDocumentoAllowableValues();
        if (!in_array($tipo_documento, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tipo_documento', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getFolioConsultaOtorgante()
    {
        return $this->container['folio_consulta_otorgante'];
    }
    
    public function setFolioConsultaOtorgante($folio_consulta_otorgante)
    {
        $this->container['folio_consulta_otorgante'] = $folio_consulta_otorgante;
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
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
