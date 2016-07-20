<?php

namespace Lib\Style;

use Lib\Utils\Template;

Class Swatch {

	public $defaultSwatch = "
				.color-primary-0 { color: #323875 }	/* Main Primary color */
				.color-primary-1 { color: #7D82B0 }
				.color-primary-2 { color: #535993 }
				.color-primary-3 { color: #191F58 }
				.color-primary-4 { color: #080D3B }

				.color-complement-0 { color: #AA8B39 }	/* Main Complement color */
				.color-complement-1 { color: #FFE8AA }
				.color-complement-2 { color: #D4B86A }
				.color-complement-3 { color: #806315 }
				.color-complement-4 { color: #553E00 }
			";


	function __construct($swatch = null)
	{
		$this->buildSwatch($swatch);
	}

	public function parseColors($swatchList)
	{
		preg_match_all('/(#[0-9A-Z]+)/', $swatchList, $colors);

		return $colors[0];
	}

	public function buildSwatch($swatch)
	{
		if(empty($swatch)){
			$swatch = $this->defaultSwatch;
		}
		$colors = $this->parseColors($swatch);

		$swatches = '';

		foreach($colors as $k => $color){
			Template::assign('swatch' . ($k + 1), $color);

			$swatches .= '<div class="swatch" style="background-color: ' . $color . '" alt="' . $color . '">' . 'swatch' . ($k + 1) . '</div>';
		}
		
		Template::assign('swatches', $swatches);		
	}
}