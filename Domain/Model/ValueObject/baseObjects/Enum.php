<?php

namespace Domain\Model\ValueObject\baseObjects;

use Domain\Model\Exception\ValueObjectException;
use ReflectionClass;

abstract class Enum
{
    private $scalar;

    public function __construct($value)
    {
        $ref    = new ReflectionClass($this);
        $Constants = $ref->getConstants();
        if (!in_array($value, $Constants, true)) {
            throw new ValueObjectException();
        }

        $this->scalar = $value;
    }

    final public static function __callStatic($label, $args)
    {
        $class = get_called_class();
        $const = constant("$class::$label");

        return new $class($const);
    }

    final public function __toString()
    {
        return (string) $this->scalar;
    }

    //元の値を取り出すメソッド。
    //メソッド名は好みのものに変更どうぞ
    final public function getValue()
    {
        return $this->scalar;
    }
}
