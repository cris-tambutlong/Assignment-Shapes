<?php

include_once 'C:\xampp\htdocs\shapes\src\Sphere.php';
use Shapes\Sphere;

/**
 * Test class for Sphere.
 */
class SphereTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Sphere
	 */
	protected $sphere;
	
	/**
	 * Sets up the fixture.
	 *
	 * Here we are instantiating a Sphere object for later use.
	 */
	public function setUp() 
	{
		//Instantiate a new Sphere object and store it on
		//a sphere class variable.
		$this->sphere = new Sphere(20);
	}
	
	/**
	 * Tears down the fixture.
	 *
	 * Here we do the clean up and destroys the sphere class variable.
	 */
	public function tearDown() 
	{
		unset($this->sphere);
	}

	/**
	 * Test our sphere object to make sure that it implements 
	 * the \Shapes\Shape3D interface so that it has the necessary
	 * methods we need for the succeeding test.
	 */
	public function testSphereIsAnInstanceOfShape3D()
	{
		$this->assertInstanceOf('\Shapes\Shape3D', $this->sphere);
	}
	
	/**
	 * Input a value that serves as the radius
	 * of a sphere and returns the surface area.
	 *
	 * @covers Sphere::area
	 */
	public function testSphereSurfaceAreaComputationIsCorrect()
	{
		//Set a mock value for the sphere's radius.
		//and compute the surface area based on the 
		//surface area math formula for a sphere.
		
		$radius = 20;
		$area = 4 * pi() * sqrt($radius);
		
		$this->assertEquals($this->sphere->area(), $area);
	}
	
	/**
	 * Input a value that serves as the radius
	 * of a sphere and returns the perimeter.
	 *
	 * @covers Sphere::perimeter
	 */
	public function testSpherePerimeterComputationIsCorrect()
	{
		//Set a mock value for the sphere's radius.
		//and compute the perimeter based on the 
		//circumference math formula for a sphere.
		
		$radius = 20;
		$perimeter = 2 * pi() * $radius;
		
		$this->assertEquals($this->sphere->perimeter(), $perimeter);
	}
	
	/**
	 * Input a value that serves as the radius
	 * of a sphere and returns the volume.
	 *
	 * @covers Sphere::volume
	 */
	public function testSphereVolumeComputationIsCorrect()
	{
		//Set a mock value for the sphere's radius.
		//and compute the volume based on the 
		//volume math formula for a sphere.
		
		$radius = 20;
		$volume = (4/3) * pi() * pow($radius, 3);
		
		$this->assertEquals($this->sphere->volume(), $volume);
	}

}
