<?php

namespace Shapes;

include_once('Shape3D.php');

/**
 * Sphere Class
 *
 * @author Cris Tambutlong
 */
class Sphere implements Shape3D {

	/**
	 * @var int $radius
	 */
	protected $radius;

	/**
	 * Sphere constructor.
	 *
	 * @param int $radius
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Get the surface area
	 *
	 * @return double
	 */
	public function surface_area()
	{
		return 4 * pi() * sqrt($this->radius);
	}

	/**
	 * Get the volume
	 *
	 * @return double
	 */
	public function volume()
	{
		return (4/3) * pi() * pow($this->radius, 3);
	}

}
