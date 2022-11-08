<?php

namespace App\Consts;

class ConstsScrapReason
{
  public const SCRAP_REASON_OTHER 				= 0;
  public const SCRAP_REASON_TOOLBROKEN 			= 1;
  public const SCRAP_REASON_TOOLLIFE 			= 2;
  public const SCRAP_REASON_NG_MATERIAL 		= 3;
  public const SCRAP_REASON_MISTAKEPROGRAM 		= 4;
  public const SCRAP_REASON_MISTAKEWORKSETTING 	= 5;
  public const SCRAP_REASON_MISTAKETOOLOFFSET 	= 6;
  public const SCRAP_REASON_MISTAKEWORKOFFSET 	= 7;
}

/*
不良理由		scrap_reasons		
メンバ								値		説明
	Other							 0		その他
	ToolBroken						 1		工具破損
	ToolLife						 2		工具寿命
	BadMaterial						 3		素材不良
	ProgramMistake					 4		プログラムミス
	WorkSetMistake					 5		段取りミス
	ToolOffsetMistake				 6		工具オフセット設定ミス
	WorkOffsetMistake				 7		ワークオフセット設定ミス
*/




