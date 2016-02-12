<?php

namespace Shapes;

interface Shape3D {

	/**
	 * Get the surface area of a 3D shape.
	 *
	 * @return mixed
	 */
	public function area();
	
	/**
	 * Get the perimeter of a 3D shape.
	 *
	 * @return mixed
	 */
	public function perimeter();

	/**
	 * Get the volume of a 3D shape.
	 *
	 * @return mixed
	 */
	public function volume();

}
