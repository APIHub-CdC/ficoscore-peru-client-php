<?php

namespace FicoscorePeru\Client\Model;

use \ArrayAccess;
use \FicoscorePeru\Client\ObjectSerializer;

class Score implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Score';
    
    protected static $apihubTypes = [
        'folio_consulta_otorgante' => 'string',
        'num_consulta' => 'float',
        'nombre_score' => 'string',
        'score' => 'float',
        'razones' => '\FicoscorePeru\Client\Model\Reason[]'
    ];
    
    protected static $apihubFormats = [
        'folio_consulta_otorgante' => null,
        'num_consulta' => null,
        'nombre_score' => null,
        'score' => null,
        'razones' => null
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
        'folio_consulta_otorgante' => 'folioConsultaOtorgante',
        'num_consulta' => 'numConsulta',
        'nombre_score' => 'nombreScore',
        'score' => 'score',
        'razones' => 'razones'
    ];
    
    protected static $setters = [
        'folio_consulta_otorgante' => 'setFolioConsultaOtorgante',
        'num_consulta' => 'setNumConsulta',
        'nombre_score' => 'setNombreScore',
        'score' => 'setScore',
        'razones' => 'setRazones'
    ];
    
    protected static $getters = [
        'folio_consulta_otorgante' => 'getFolioConsultaOtorgante',
        'num_consulta' => 'getNumConsulta',
        'nombre_score' => 'getNombreScore',
        'score' => 'getScore',
        'razones' => 'getRazones'
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
   

    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['folio_consulta_otorgante'] = isset($data['folio_consulta_otorgante']) ? $data['folio_consulta_otorgante'] : null;
        $this->container['num_consulta'] = isset($data['num_consulta']) ? $data['num_consulta'] : null;
        $this->container['nombre_score'] = isset($data['nombre_score']) ? $data['nombre_score'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['razones'] = isset($data['razones']) ? $data['razones'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
      
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
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
    
    public function getNumConsulta()
    {
        return $this->container['num_consulta'];
    }
    
    public function setNumConsulta($num_consulta)
    {
        $this->container['num_consulta'] = $num_consulta;
        return $this;
    }
    
    public function getNombreScore()
    {
        return $this->container['nombre_score'];
    }
    
    public function setNombreScore($nombre_score)
    {
        $this->container['nombre_score'] = $nombre_score;
        return $this;
    }
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }
   
    public function getRazones()
    {
        return $this->container['razones'];
    }

   
    public function setRazones($razones)
    {
        $this->container['razones'] = $razones;

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
