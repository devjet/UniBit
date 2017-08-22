<?php

namespace UniBit;

class UniBitTest
{
	public function RunTest()
	{
		$mixed = 0x00000000; //hex
		$bit = 4;
		printf("1) Binary value: %08b bit: %d result: %s<br>",$mixed,$bit,(UniBit::IsBitSet($mixed,$bit)?("On"):("Off")));
		UniBit::BitOff($mixed,$bit);
		printf("2) Binary value: %08b bit: %d result: %s<br>",$mixed,$bit,(UniBit::IsBitSet($mixed,$bit)?("On"):("Off")));
		UniBit::BitOn($mixed,$bit);
		printf("3) Binary value: %08b bit: %d result: %s<br>",$mixed,$bit,(UniBit::IsBitSet($mixed,$bit)?("On"):("Off")));
		UniBit::BitToggle($mixed,$bit);
		printf("4) Binary value: %08b bit: %d result: %s<br>",$mixed,$bit,(UniBit::IsBitSet($mixed,$bit)?("On"):("Off")));
		UniBit::BitToggle($mixed,$bit);
		printf("5) Binary value: %08b bit: %d result: %s<br>",$mixed,$bit,(UniBit::IsBitSet($mixed,$bit)?("On"):("Off")));
		UniBit::BitRandom($mixed,$bit);
		printf("6) Binary value: %08b bit: %d result: %s<br>",$mixed,$bit,(UniBit::IsBitSet($mixed,$bit)?("On"):("Off")));
	}
}


//$test = new UniBitTest();
//$test->RunTest();