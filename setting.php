<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "jGFTnK8BQ/kCvxH3BAR353JemKIIydLWnnp4YJ1tnT5maBS2h60Ki+M78GnWI+sAt1Y14Vxjk1MDdDwLuDn0R8N42ATtZq4kEyx0TL3dsB9uwX2Vf4MmYqNy2kUeh/cEphI2rzw8uUAiYEcPFLtyAAdB04t89/1O/w1cDnyilFU=";
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
