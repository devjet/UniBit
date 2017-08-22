<?php

namespace UniBit;

class UniBit {
	
	
	/**
	 * Check if bit number $bit is set to 1 in $mixed 
	 *
	 * @param mixed $mixed
	 * @param int $bit
	 * @return bool
	 */
	public static function IsBitSet($mixed, $bit) {
		if (is_int ( $mixed )) {
			return ! ! ($mixed & 1 << $bit);
		}
		if (is_string ( $mixed )) {
			$mixed = ord ( substr ( $mixed, 0, 1 ) );
			return self::IsBitSet($mixed,$bit);
		}
		return false;
	}
	
	/**
	 * Turn on bit number $bit in $mixed
	 *
	 * @param mixed $mixed
	 * @param int $bit
	 * @return bool
	 */
	public static function BitOn(&$mixed, $bit) {
		if (is_int ( $mixed )) {
			$mixed = $mixed | (1 << $bit);
			return $mixed;
		}
		if (is_string ( $mixed )) {
			$mixed = ord ( substr ( $mixed, 0, 1 ) );
			return self::BitOn($mixed,$bit);
		}		
		return false;
	}
	
	/**
	 * Turn off bit number $bit in $mixed
	 *
	 * @param mixed $mixed
	 * @param int $bit
	 * @return bool
	 */
	public static function BitOff(&$mixed, $bit) {
		if (is_int ( $mixed )) {
			$mixed = $mixed & ((1 << $bit) ^ 0xFFFFFFFF);
			return $mixed;
		}
		if (is_string ( $mixed )) {
			$mixed = ord ( substr ( $mixed, 0, 1 ) );
			return self::BitOff($mixed,$bit);
		}		
		return false;
	}
		
	public static function BitRandom(&$iVal, $bBit) {
		return (rand () % 2) ? self::BitOn ( $iVal, $bBit ) : self::BitOff ( $iVal, $bBit );
	}
	
	public static function BitToggle(&$iVal, $bBit) {
		return $iVal ^= (1 << $bBit);
	}

}


?>