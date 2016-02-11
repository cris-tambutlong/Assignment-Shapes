<?php

include_once 'C:\xampp\htdocs\shapes\src\Cube.php';
use Shapes\Cube;

/**
 * Test class for Cube.
 */
class CubeTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Cube
	 */
	protected $cube;

	/**
	 * Sets up the fixture.
	 *
	 * Here we are instantiating a Cube object for later use.
	 */
	public function setUp() 
	{
		//Instantiate a new Cube object and store it on
		//a cube class variable.
		$this->cube = new Cube(20);
	}
	
	/**
	 * Tears down the fixture.
	 *
	 * Here we do the clean up and destroys the cube class variable.
	 */
	public function tearDown() 
	{
		unset($this->cube);
	}

	/**
	 * Test our cube object to make sure that it implements 
	 * the \Shapes\Shape3D interface so that it has the necessary
	 * methods we need for the succeeding test.
	 */
	public function testCubeIsAnInstanceOfShape3D()
	{
		$this->assertInstanceOf('\Shapes\Shape3D', $this->cube);
	}
	
	/**
	 * Input a value that serves as the length of 1 side
	 * of a cube and returns the surface area.
	 *
	 * @covers Cube::surface_area
	 */
	public function testCubeSurfaceAreaComputationIsCorrect()
	{
		//Set a mock value for the cube's length of side.
		//and compute the surface area based on the 
		//surface area math formula for a cube.
		
		$length_of_side = 20;
		$surface_area = 6 * sqrt($length_of_side);
		
		$this->assertEquals($this->cube->surface_area(), $surface_area);
	}
	
	/**
	 * Input a value that serves as the length of 1 side
	 * of a cube and returns the volume.
	 *
	 * @covers Cube::volume
	 */
	public function testCubeVolumeComputationIsCorrect()
	{
		//Set a mock value for the cube's length of side.
		//and compute the volume based on the 
		//volume math formula for a cube.
		
		$length_of_side = 20;
		$volume = pow($length_of_side, 3);
		
		$this->assertEquals($this->cube->volume(), $volume);
	}

}
