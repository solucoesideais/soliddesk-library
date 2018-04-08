<?php

namespace Library\Listeners;

use Library\Eloquent\Auth\User;
use Library\Exceptions\DepartmentException;

class ValidateUserDepartment
{
    /**
     * @throws DepartmentException
     */
    public function handle(User $user)
    {
        if ($this->isInvalidDepartment($user)) {
            throw DepartmentException::companyNotLinked($user->department_id, $user->company_id);
        }
    }

    private function isInvalidDepartment(User $user): bool
    {
        if ($user->department_id === null) {
            return false;
        }

        return $user->company
                ->departments()
                ->wherePivotIn('department_id', [$user->department_id])
                ->count() == 0;
    }
}