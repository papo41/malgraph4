<?php
class Config extends Singleton
{
	static $userQueuePath;
	static $mirrorPath;
	static $mirrorEnabled;
	static $dbPath;
	static $debugCron;

	public static function doInit()
	{
		self::$userQueuePath = __DIR__ . '/../data/users.lst';
		self::$mirrorPath = __DIR__ . '/../data/mirror/';
		self::$dbPath = __DIR__ . '/../data/db.sqlite';
		self::$debugCron = true;
		self::$mirrorEnabled = true;
	}
}

Config::init();