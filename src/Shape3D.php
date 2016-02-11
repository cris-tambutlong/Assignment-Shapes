<?php

namespace Shapes;

interface Shape3D {

	/**
	 * Get the surface area of a 3D shape.
	 *
	 * @return int
	 */
	public function surface_area();

	/**
	 * Get the volume of a 3D shape.
	 *
	 * @return int
	 */
	public function volume();

}
