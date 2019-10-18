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
        'reason_code1' => 'string',
        'reason_code2' => 'string',
        'reason_code3' => 'string',
        'reason_code4' => 'string'
    ];
    
    protected static $apihubFormats = [
        'folio_consulta_otorgante' => null,
        'num_consulta' => null,
        'nombre_score' => null,
        'score' => null,
        'reason_code1' => null,
        'reason_code2' => null,
        'reason_code3' => null,
        'reason_code4' => null
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
        'reason_code1' => 'reasonCode1',
        'reason_code2' => 'reasonCode2',
        'reason_code3' => 'reasonCode3',
        'reason_code4' => 'reasonCode4'
    ];
    
    protected static $setters = [
        'folio_consulta_otorgante' => 'setFolioConsultaOtorgante',
        'num_consulta' => 'setNumConsulta',
        'nombre_score' => 'setNombreScore',
        'score' => 'setScore',
        'reason_code1' => 'setReasonCode1',
        'reason_code2' => 'setReasonCode2',
        'reason_code3' => 'setReasonCode3',
        'reason_code4' => 'setReasonCode4'
    ];
    
    protected static $getters = [
        'folio_consulta_otorgante' => 'getFolioConsultaOtorgante',
        'num_consulta' => 'getNumConsulta',
        'nombre_score' => 'getNombreScore',
        'score' => 'getScore',
        'reason_code1' => 'getReasonCode1',
        'reason_code2' => 'getReasonCode2',
        'reason_code3' => 'getReasonCode3',
        'reason_code4' => 'getReasonCode4'
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
    const REASON_CODE1_A1 = 'A1';
    const REASON_CODE1_A3 = 'A3';
    const REASON_CODE1_C1 = 'C1';
    const REASON_CODE1_C2 = 'C2';
    const REASON_CODE1_C4 = 'C4';
    const REASON_CODE1_C6 = 'C6';
    const REASON_CODE1_C7 = 'C7';
    const REASON_CODE1_D2 = 'D2';
    const REASON_CODE1_D8 = 'D8';
    const REASON_CODE1_E0 = 'E0';
    const REASON_CODE1_E1 = 'E1';
    const REASON_CODE1_E4 = 'E4';
    const REASON_CODE1_F1 = 'F1';
    const REASON_CODE1_F7 = 'F7';
    const REASON_CODE1_F8 = 'F8';
    const REASON_CODE1_G1 = 'G1';
    const REASON_CODE1_G2 = 'G2';
    const REASON_CODE1_J0 = 'J0';
    const REASON_CODE1_K0 = 'K0';
    const REASON_CODE1_K2 = 'K2';
    const REASON_CODE1_M1 = 'M1';
    const REASON_CODE1_M5 = 'M5';
    const REASON_CODE1_N3 = 'N3';
    const REASON_CODE1_P6 = 'P6';
    const REASON_CODE1_P9 = 'P9';
    const REASON_CODE1_Q0 = 'Q0';
    const REASON_CODE1_R0 = 'R0';
    const REASON_CODE1_R2 = 'R2';
    const REASON_CODE1_R3 = 'R3';
    const REASON_CODE1_SC = 'SC';
    const REASON_CODE1_T0 = 'T0';
    const REASON_CODE1_T1 = 'T1';
    const REASON_CODE1_T4 = 'T4';
    const REASON_CODE1_U7 = 'U7';
    const REASON_CODE1_V3 = 'V3';
    const REASON_CODE1_Z3 = 'Z3';
    const REASON_CODE2_A1 = 'A1';
    const REASON_CODE2_A3 = 'A3';
    const REASON_CODE2_C1 = 'C1';
    const REASON_CODE2_C2 = 'C2';
    const REASON_CODE2_C4 = 'C4';
    const REASON_CODE2_C6 = 'C6';
    const REASON_CODE2_C7 = 'C7';
    const REASON_CODE2_D2 = 'D2';
    const REASON_CODE2_D8 = 'D8';
    const REASON_CODE2_E0 = 'E0';
    const REASON_CODE2_E1 = 'E1';
    const REASON_CODE2_E4 = 'E4';
    const REASON_CODE2_F1 = 'F1';
    const REASON_CODE2_F7 = 'F7';
    const REASON_CODE2_F8 = 'F8';
    const REASON_CODE2_G1 = 'G1';
    const REASON_CODE2_G2 = 'G2';
    const REASON_CODE2_J0 = 'J0';
    const REASON_CODE2_K0 = 'K0';
    const REASON_CODE2_K2 = 'K2';
    const REASON_CODE2_M1 = 'M1';
    const REASON_CODE2_M5 = 'M5';
    const REASON_CODE2_N3 = 'N3';
    const REASON_CODE2_P6 = 'P6';
    const REASON_CODE2_P9 = 'P9';
    const REASON_CODE2_Q0 = 'Q0';
    const REASON_CODE2_R0 = 'R0';
    const REASON_CODE2_R2 = 'R2';
    const REASON_CODE2_R3 = 'R3';
    const REASON_CODE2_SC = 'SC';
    const REASON_CODE2_T0 = 'T0';
    const REASON_CODE2_T1 = 'T1';
    const REASON_CODE2_T4 = 'T4';
    const REASON_CODE2_U7 = 'U7';
    const REASON_CODE2_V3 = 'V3';
    const REASON_CODE2_Z3 = 'Z3';
    const REASON_CODE3_A1 = 'A1';
    const REASON_CODE3_A3 = 'A3';
    const REASON_CODE3_C1 = 'C1';
    const REASON_CODE3_C2 = 'C2';
    const REASON_CODE3_C4 = 'C4';
    const REASON_CODE3_C6 = 'C6';
    const REASON_CODE3_C7 = 'C7';
    const REASON_CODE3_D2 = 'D2';
    const REASON_CODE3_D8 = 'D8';
    const REASON_CODE3_E0 = 'E0';
    const REASON_CODE3_E1 = 'E1';
    const REASON_CODE3_E4 = 'E4';
    const REASON_CODE3_F1 = 'F1';
    const REASON_CODE3_F7 = 'F7';
    const REASON_CODE3_F8 = 'F8';
    const REASON_CODE3_G1 = 'G1';
    const REASON_CODE3_G2 = 'G2';
    const REASON_CODE3_J0 = 'J0';
    const REASON_CODE3_K0 = 'K0';
    const REASON_CODE3_K2 = 'K2';
    const REASON_CODE3_M1 = 'M1';
    const REASON_CODE3_M5 = 'M5';
    const REASON_CODE3_N3 = 'N3';
    const REASON_CODE3_P6 = 'P6';
    const REASON_CODE3_P9 = 'P9';
    const REASON_CODE3_Q0 = 'Q0';
    const REASON_CODE3_R0 = 'R0';
    const REASON_CODE3_R2 = 'R2';
    const REASON_CODE3_R3 = 'R3';
    const REASON_CODE3_SC = 'SC';
    const REASON_CODE3_T0 = 'T0';
    const REASON_CODE3_T1 = 'T1';
    const REASON_CODE3_T4 = 'T4';
    const REASON_CODE3_U7 = 'U7';
    const REASON_CODE3_V3 = 'V3';
    const REASON_CODE3_Z3 = 'Z3';
    const REASON_CODE4_A1 = 'A1';
    const REASON_CODE4_A3 = 'A3';
    const REASON_CODE4_C1 = 'C1';
    const REASON_CODE4_C2 = 'C2';
    const REASON_CODE4_C4 = 'C4';
    const REASON_CODE4_C6 = 'C6';
    const REASON_CODE4_C7 = 'C7';
    const REASON_CODE4_D2 = 'D2';
    const REASON_CODE4_D8 = 'D8';
    const REASON_CODE4_E0 = 'E0';
    const REASON_CODE4_E1 = 'E1';
    const REASON_CODE4_E4 = 'E4';
    const REASON_CODE4_F1 = 'F1';
    const REASON_CODE4_F7 = 'F7';
    const REASON_CODE4_F8 = 'F8';
    const REASON_CODE4_G1 = 'G1';
    const REASON_CODE4_G2 = 'G2';
    const REASON_CODE4_J0 = 'J0';
    const REASON_CODE4_K0 = 'K0';
    const REASON_CODE4_K2 = 'K2';
    const REASON_CODE4_M1 = 'M1';
    const REASON_CODE4_M5 = 'M5';
    const REASON_CODE4_N3 = 'N3';
    const REASON_CODE4_P6 = 'P6';
    const REASON_CODE4_P9 = 'P9';
    const REASON_CODE4_Q0 = 'Q0';
    const REASON_CODE4_R0 = 'R0';
    const REASON_CODE4_R2 = 'R2';
    const REASON_CODE4_R3 = 'R3';
    const REASON_CODE4_SC = 'SC';
    const REASON_CODE4_T0 = 'T0';
    const REASON_CODE4_T1 = 'T1';
    const REASON_CODE4_T4 = 'T4';
    const REASON_CODE4_U7 = 'U7';
    const REASON_CODE4_V3 = 'V3';
    const REASON_CODE4_Z3 = 'Z3';
    
    
    
    public function getReasonCode1AllowableValues()
    {
        return [
            self::REASON_CODE1_A1,
            self::REASON_CODE1_A3,
            self::REASON_CODE1_C1,
            self::REASON_CODE1_C2,
            self::REASON_CODE1_C4,
            self::REASON_CODE1_C6,
            self::REASON_CODE1_C7,
            self::REASON_CODE1_D2,
            self::REASON_CODE1_D8,
            self::REASON_CODE1_E0,
            self::REASON_CODE1_E1,
            self::REASON_CODE1_E4,
            self::REASON_CODE1_F1,
            self::REASON_CODE1_F7,
            self::REASON_CODE1_F8,
            self::REASON_CODE1_G1,
            self::REASON_CODE1_G2,
            self::REASON_CODE1_J0,
            self::REASON_CODE1_K0,
            self::REASON_CODE1_K2,
            self::REASON_CODE1_M1,
            self::REASON_CODE1_M5,
            self::REASON_CODE1_N3,
            self::REASON_CODE1_P6,
            self::REASON_CODE1_P9,
            self::REASON_CODE1_Q0,
            self::REASON_CODE1_R0,
            self::REASON_CODE1_R2,
            self::REASON_CODE1_R3,
            self::REASON_CODE1_SC,
            self::REASON_CODE1_T0,
            self::REASON_CODE1_T1,
            self::REASON_CODE1_T4,
            self::REASON_CODE1_U7,
            self::REASON_CODE1_V3,
            self::REASON_CODE1_Z3,
        ];
    }
    
    
    public function getReasonCode2AllowableValues()
    {
        return [
            self::REASON_CODE2_A1,
            self::REASON_CODE2_A3,
            self::REASON_CODE2_C1,
            self::REASON_CODE2_C2,
            self::REASON_CODE2_C4,
            self::REASON_CODE2_C6,
            self::REASON_CODE2_C7,
            self::REASON_CODE2_D2,
            self::REASON_CODE2_D8,
            self::REASON_CODE2_E0,
            self::REASON_CODE2_E1,
            self::REASON_CODE2_E4,
            self::REASON_CODE2_F1,
            self::REASON_CODE2_F7,
            self::REASON_CODE2_F8,
            self::REASON_CODE2_G1,
            self::REASON_CODE2_G2,
            self::REASON_CODE2_J0,
            self::REASON_CODE2_K0,
            self::REASON_CODE2_K2,
            self::REASON_CODE2_M1,
            self::REASON_CODE2_M5,
            self::REASON_CODE2_N3,
            self::REASON_CODE2_P6,
            self::REASON_CODE2_P9,
            self::REASON_CODE2_Q0,
            self::REASON_CODE2_R0,
            self::REASON_CODE2_R2,
            self::REASON_CODE2_R3,
            self::REASON_CODE2_SC,
            self::REASON_CODE2_T0,
            self::REASON_CODE2_T1,
            self::REASON_CODE2_T4,
            self::REASON_CODE2_U7,
            self::REASON_CODE2_V3,
            self::REASON_CODE2_Z3,
        ];
    }
    
    
    public function getReasonCode3AllowableValues()
    {
        return [
            self::REASON_CODE3_A1,
            self::REASON_CODE3_A3,
            self::REASON_CODE3_C1,
            self::REASON_CODE3_C2,
            self::REASON_CODE3_C4,
            self::REASON_CODE3_C6,
            self::REASON_CODE3_C7,
            self::REASON_CODE3_D2,
            self::REASON_CODE3_D8,
            self::REASON_CODE3_E0,
            self::REASON_CODE3_E1,
            self::REASON_CODE3_E4,
            self::REASON_CODE3_F1,
            self::REASON_CODE3_F7,
            self::REASON_CODE3_F8,
            self::REASON_CODE3_G1,
            self::REASON_CODE3_G2,
            self::REASON_CODE3_J0,
            self::REASON_CODE3_K0,
            self::REASON_CODE3_K2,
            self::REASON_CODE3_M1,
            self::REASON_CODE3_M5,
            self::REASON_CODE3_N3,
            self::REASON_CODE3_P6,
            self::REASON_CODE3_P9,
            self::REASON_CODE3_Q0,
            self::REASON_CODE3_R0,
            self::REASON_CODE3_R2,
            self::REASON_CODE3_R3,
            self::REASON_CODE3_SC,
            self::REASON_CODE3_T0,
            self::REASON_CODE3_T1,
            self::REASON_CODE3_T4,
            self::REASON_CODE3_U7,
            self::REASON_CODE3_V3,
            self::REASON_CODE3_Z3,
        ];
    }
    
    
    public function getReasonCode4AllowableValues()
    {
        return [
            self::REASON_CODE4_A1,
            self::REASON_CODE4_A3,
            self::REASON_CODE4_C1,
            self::REASON_CODE4_C2,
            self::REASON_CODE4_C4,
            self::REASON_CODE4_C6,
            self::REASON_CODE4_C7,
            self::REASON_CODE4_D2,
            self::REASON_CODE4_D8,
            self::REASON_CODE4_E0,
            self::REASON_CODE4_E1,
            self::REASON_CODE4_E4,
            self::REASON_CODE4_F1,
            self::REASON_CODE4_F7,
            self::REASON_CODE4_F8,
            self::REASON_CODE4_G1,
            self::REASON_CODE4_G2,
            self::REASON_CODE4_J0,
            self::REASON_CODE4_K0,
            self::REASON_CODE4_K2,
            self::REASON_CODE4_M1,
            self::REASON_CODE4_M5,
            self::REASON_CODE4_N3,
            self::REASON_CODE4_P6,
            self::REASON_CODE4_P9,
            self::REASON_CODE4_Q0,
            self::REASON_CODE4_R0,
            self::REASON_CODE4_R2,
            self::REASON_CODE4_R3,
            self::REASON_CODE4_SC,
            self::REASON_CODE4_T0,
            self::REASON_CODE4_T1,
            self::REASON_CODE4_T4,
            self::REASON_CODE4_U7,
            self::REASON_CODE4_V3,
            self::REASON_CODE4_Z3,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['folio_consulta_otorgante'] = isset($data['folio_consulta_otorgante']) ? $data['folio_consulta_otorgante'] : null;
        $this->container['num_consulta'] = isset($data['num_consulta']) ? $data['num_consulta'] : null;
        $this->container['nombre_score'] = isset($data['nombre_score']) ? $data['nombre_score'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['reason_code1'] = isset($data['reason_code1']) ? $data['reason_code1'] : null;
        $this->container['reason_code2'] = isset($data['reason_code2']) ? $data['reason_code2'] : null;
        $this->container['reason_code3'] = isset($data['reason_code3']) ? $data['reason_code3'] : null;
        $this->container['reason_code4'] = isset($data['reason_code4']) ? $data['reason_code4'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getReasonCode1AllowableValues();
        if (!is_null($this->container['reason_code1']) && !in_array($this->container['reason_code1'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason_code1', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        $allowedValues = $this->getReasonCode2AllowableValues();
        if (!is_null($this->container['reason_code2']) && !in_array($this->container['reason_code2'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason_code2', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        $allowedValues = $this->getReasonCode3AllowableValues();
        if (!is_null($this->container['reason_code3']) && !in_array($this->container['reason_code3'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason_code3', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        $allowedValues = $this->getReasonCode4AllowableValues();
        if (!is_null($this->container['reason_code4']) && !in_array($this->container['reason_code4'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason_code4', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
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
    
    public function getReasonCode1()
    {
        return $this->container['reason_code1'];
    }
    
    public function setReasonCode1($reason_code1)
    {
        $allowedValues = $this->getReasonCode1AllowableValues();
        if (!is_null($reason_code1) && !in_array($reason_code1, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason_code1', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code1'] = $reason_code1;
        return $this;
    }
    
    public function getReasonCode2()
    {
        return $this->container['reason_code2'];
    }
    
    public function setReasonCode2($reason_code2)
    {
        $allowedValues = $this->getReasonCode2AllowableValues();
        if (!is_null($reason_code2) && !in_array($reason_code2, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason_code2', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code2'] = $reason_code2;
        return $this;
    }
    
    public function getReasonCode3()
    {
        return $this->container['reason_code3'];
    }
    
    public function setReasonCode3($reason_code3)
    {
        $allowedValues = $this->getReasonCode3AllowableValues();
        if (!is_null($reason_code3) && !in_array($reason_code3, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason_code3', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code3'] = $reason_code3;
        return $this;
    }
    
    public function getReasonCode4()
    {
        return $this->container['reason_code4'];
    }
    
    public function setReasonCode4($reason_code4)
    {
        $allowedValues = $this->getReasonCode4AllowableValues();
        if (!is_null($reason_code4) && !in_array($reason_code4, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason_code4', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code4'] = $reason_code4;
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
