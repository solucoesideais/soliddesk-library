<?php

namespace Library\Exceptions;

class DepartmentException extends BaseException
{
    public static function companyNotLinked(int $department, int $company)
    {
        return new static("Trying to save user with department [$department] that doesn't belong to company [$company]");
    }
}
