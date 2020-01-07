<?php
namespace App\Repositories;

use App\Staff;
use App\Tourcase;

class TourcaseRepository
{
    /**
     * 取得給定使用者的所有任務。
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(staff $staff)
    {
        return Tourcase::where('staff_id', $staff->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
