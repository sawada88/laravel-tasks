<?php

namespace App\Consts;

class ConstsProductionOrderProgressStatus
{
  public const PRODUCTION_PROGRESS_STATUS_NOTINPUT 	= 0;
  public const PRODUCTION_PROGRESS_STATUS_REMAIN 	= 1;
  public const PRODUCTION_PROGRESS_STATUS_INPROCESS	= 2;
  public const PRODUCTION_PROGRESS_STATUS_SCRAP 	= 3;
  public const PRODUCTION_PROGRESS_STATUS_COMPLETE	= 4;
}

/*												
生産命令進捗ステータス	production_orders		
メンバ					値		説明
	NotInput			 0		未投入
	Remain				 1		素材
	InProcess			 2		仕掛中
	Scrap				 3		不良品
	Complete			 4		完成品
*/



