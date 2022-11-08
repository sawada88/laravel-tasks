<?php

namespace Domain\Model\ValueObject\baseObjects;

class ApiURL extends Enum
{
    /** camelCaseのカラム名 */
    const CAMEL_COLUMN_NAME = 'apiURL';

    /**
     * URL一覧
     * E118PR-1-5001(2022.06.06版を元に作成).xlsx
     * 
     */
    /** 認証 仕様書が来ていないので仮 */
    const AUTH = 'auth';
    /** アラーム一覧取得 */
    const ALARM_HISTORY = 'AlarmHistory';
    /** 機種一覧取得 仕様書が来ていないので仮 */
    const MACHINE = 'machine';

    /**
     * 中身全てを取得する
     *
     * @return array<ApiURL>
     */
    public static function getAll(): array
    {
        return [
            self::AUTH,
            self::ALARM_HISTORY,
            self::MACHINE,
        ];
    }

    // 定義された値が一致するものを返す
    public static function with(string $apiURL): ?ApiURL
    {
        $filtered = array_filter(self::getAll(), function ($v) use ($apiURL) {
            return $v === $apiURL;
        });
        $first = current($filtered);

        // 何もなければ空
        if (empty($first)) {
            return null;
        }

        return new self($first);
    }

    // バリデーションで使用
    public static function getValidateRule(): string
    {
        $VALIDATION_RULE = 'required|string|in:' . implode(',', self::getAll());

        return $VALIDATION_RULE;
    }
}
