<?php

namespace Spellu\Test;

class Class01
{
	const CONSTANT_PUBLIC = 'apple';

	public static function methodStaticPublic()
	{
	}

	protected static function methodStaticProtected()
	{
	}

	private static function methodStaticPrivate()
	{
	}

	public function methodInstancePublic()
	{
	}

	protected function methodInstanceProtected()
	{
	}

	private function methodInstancePrivate()
	{
	}

	public static $propertyStaticPublic = '';

	protected static $propertyStaticProtected = '';

	private static $propertyStaticPrivate = '';

	public $propertyInstancePublic = '';

	protected $propertyInstanceProtected = '';

	private $propertyInstancePrivate = '';
}
