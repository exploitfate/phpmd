<?php
class testRuleNotAppliesToStaticMembersAccessedInMethod
{
    private static $fo = 42;

    public static function testRuleNotAppliesToStaticMembersAccessedInMethod()
    {
        self::$fo = 42;
    }
}