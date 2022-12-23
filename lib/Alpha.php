<?php
class Alpha{
    const YARD = 1.09361;
    const METER= 0.9144;
    
    /**
     * 1meter = 1.09361yard
     * @param float $inputValue1
     * @param string $inputUnit1
     * @param float $inputValue2
     * @param string $inputUnit2
     * @return array
     */
    
    function calculate(float $inputValue1, string $inputUnit1, float $inputValue2, string $inputUnit2, string $inputUnitTotal) {
        $total = 0;
        $units = ['meter','yard'];
        if(!in_array($inputUnit1, $units) || !in_array($inputUnit2, $units) || !in_array($inputUnitTotal, $units)){
            return ['code' => 90001, 'message' => 'Invalid unit'];
        }
        if($inputUnitTotal == 'meter'){
            if($inputUnit1 == 'yard'){
                $inputValue1 = $inputValue1 * self::METER;
            }
            if($inputUnit2 == 'yard'){
                $inputValue2 = $inputValue2 * self::METER;
            }
            $total = $inputValue1 + $inputValue2;
        }
        if($inputUnitTotal == 'yard'){
            if($inputUnit1 == 'meter'){
                $inputValue1 = $inputValue1 * self::YARD;
            }
            if($inputUnit2 == 'meter'){
                $inputValue2 = $inputValue2 * self::YARD;
            }
            $total = $inputValue1 + $inputValue2;
        }
        return ['code' => 10000, 'message' => '', 'total' => $total];
    }
}
