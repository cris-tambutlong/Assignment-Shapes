<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shapes
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		//Setting the initial total sum of area to zero (0).
		$sum = 0;
		
		//Iterate through all the shapes and process
		//them one by one.
		foreach($shapes as $shape)
		{
			//We making sure we execute the correct area method 
			//for each shape object. Normally, a 2D object computes
			//for the area while a 3D object computes for surface area.
			
			if ($shape instanceof Shape3D)
			{
				$sum += $shape->surface_area();
			}
			else
			{
				$sum += $shape->area();
			}
		}	
		
		//Return the total sum of area.
		return $sum;
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		//Setting the initial total sum of volume to zero (0).
		$sum = 0;
		
		//Iterate through all the shapes and process
		//them one by one.
		foreach($shapes as $shape)
		{
			//We making sure that we're filtering the shape to only 
			//get the volume of 3D shape since 2D shape doesn't have volume. 
			if ($shape instanceof Shape3D)
			{
				$sum += $shape->volume();
			}
		}
		
		//Return the total sum of volume.
		return $sum;
	}

}
