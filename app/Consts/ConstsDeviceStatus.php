<?php

namespace App\Consts;

class ConstsDeviceStatus
{
  public const DEVICE_STATUS_INCYCLE 	= 0;
  public const DEVICE_STATUS_WARMUP 	= 1;
  public const DEVICE_STATUS_OPECALL 	= 2;
  public const DEVICE_STATUS_FEEDHOLD 	= 3;
  public const DEVICE_STATUS_IDLE 		= 4;
  public const DEVICE_STATUS_ALARM  	= 5;
  public const DEVICE_STATUS_MAINTENANCE = 6;
  public const DEVICE_STATUS_POWEROFF 	= 7;
  public const DEVICE_STATUS_NODATA 	= 8;
}


/*												
装置ステータス
メンバ						値		説明
	InCycle					 0		運転中
	Running					 1		暖機運転
	OperatorCall			 2		オペレータコール
	FeedHold				 3		フィードホールド
	Idle					 4		停止中
	Alarm					 5		アラーム
	Maintenance				 6		保守モード
	PowerOff				 7		電源OFF
	NoData					 8		データ未収集
*/


