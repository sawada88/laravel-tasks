<?php

namespace App\Consts;

class ConstsMachineIdleReason
{
  public const MACHINE_IDLE_REASON_OTHER	 	= 0;
  public const MACHINE_IDLE_REASON_WAITTOOL 	= 1;
  public const MACHINE_IDLE_REASON_WAITWORKPIECE = 2;
  public const MACHINE_IDLE_REASON_M00M01 		= 3;
  public const MACHINE_IDLE_REASON_BREAKDOWN 	= 4;
  public const MACHINE_IDLE_REASON_WAITOPERATOR	= 5;
}
/*														
停止要因		machine_idle_reasons	
メンバ					値		説明
	Other				 0		その他
	WaitTool			 1		工具待ち
	WaitWorkpiece		 2		ワーク待ち
	M00					 3		M00
	Breakdown			 4		故障
	WaitOperator		 5		作業者待ち
*/


