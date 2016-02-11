<?php

namespace Shapes;

include_once('Shape3D.php');

/**
 * Cube Class
 *
 * @author Cris Tambutlong
 */
class Cube implements Shape3D {

	/**
	 * @var int $side
	 */
	protected $side;

	/**
	 * Cube constructor.
	 *
	 * @param int $side
	 */
	public function __construct($side)
	{
		$this->side = $side;
	}

	/**
	 * Get the surface area
	 *
	 * @return int
	 */
	public function surface_area()
	{
		return 6 * sqrt($this->side);
	}

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume()
	{
		return pow($this->side, 3);
	}

}
