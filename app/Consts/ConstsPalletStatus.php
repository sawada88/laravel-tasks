<?php

namespace App\Consts;

class ConstsPalletStatus
{
  public const PALLET_STATUS_NOWORK		 			= 0;
  public const PALLET_STATUS_MACHINING 				= 1;
  public const PALLET_STATUS_WSSOPERATION 			= 2;
  public const PALLET_STATUS_RUNNINGONOTHERDEVICE 	= 3;
  public const PALLET_STATUS_WAITINGFORMACHINING 	= 4;
  public const PALLET_STATUS_WAITINGFORWSSOPERATION = 5;
  public const PALLET_STATUS_WAITINGFOROTHERDEVICEOPERATION	= 6;
  public const PALLET_STATUS_MACHININGSUSPEND 		= 7;
  public const PALLET_STATUS_WSSSUSPEND 			= 8;
  public const PALLET_STATUS_OTHERDEVICEJOBSUSPEND 	= 9;
  public const PALLET_STATUS_MANUALTRANSPORT 		= 10;
  public const PALLET_STATUS_DAMAGED 				= 11;

  public const PALLET_STATUS_CONST_MAX					= 11;
}
/*
パレットステータス		pallet_status		
メンバ										値		説明
	NoWorkpiece								 0		ワーク無し
	Machining								 1		加工中
	WssOperation							 2		段取り中
	RunningOnOtherDevice					 3		その他の装置実行中
	WaitingForMachining						 4		加工待ち
	WaitingForWssOperation					 5		段取り待ち
	WaitingForOtherDeviceOperation			 6		その他の装置実行待ち
	MachiningSuspend						 7		加工保留
	WssSuspend								 8		段取り保留
	OtherDeviceJobSuspend					 9		その他保留
	ManualTransport							10		手動搬送中
	Damaged									11		使用不可
														
*/

