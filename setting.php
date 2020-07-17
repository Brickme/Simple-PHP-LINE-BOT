<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "AjDDLZgHbhDMmN4ZXuqLo9OhWk9It3eiM1KFJXyYmxJvFcgVmhQ4PODs8bp1rQIzt1Y14Vxjk1MDdDwLuDn0R8N42ATtZq4kEyx0TL3dsB+GLSBuDzULKCnmdeOOksqTaHbZXKx2tUYPP9+YQMWyJgdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "eaaececc148e70670a9a64593627d801";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
