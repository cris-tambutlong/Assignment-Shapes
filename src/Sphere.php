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
	public function area()
	{
		return 4 * pi() * sqrt($this->radius);
	}
	
	/**
	 * Get the perimeter. For a sphere shape we're computing
	 * for the circumference.
	 *
	 * @return double
	 */
	public function perimeter()
	{
		//We're executing the circumference formula here.
		return 2 * pi() * $this->radius;
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
