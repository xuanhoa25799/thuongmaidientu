<?php

namespace App\Policies;

use App\User;
use App\TheLoai;
use Illuminate\Auth\Access\HandlesAuthorization;

class TheLoaiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any the loais.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the the loai.
     *
     * @param  \App\User  $user
     * @param  \App\TheLoai  $theLoai
     * @return mixed
     */
    public function view(User $user)
    {
//        return $user->checkPermissionAccess(config('permissions.access.list-theloai'));
    }

    /**
     * Determine whether the user can create the loais.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
//        return $user->checkPermissionAccess(config('permissions.access.add-theloai'));
    }

    /**
     * Determine whether the user can update the the loai.
     *
     * @param  \App\User  $user
     * @param  \App\TheLoai  $theLoai
     * @return mixed
     */
    public function update(User $user)
    {
//        return $user->checkPermissionAccess(config('permissions.access.edit-theloai'));
    }

    /**
     * Determine whether the user can delete the the loai.
     *
     * @param  \App\User  $user
     * @param  \App\TheLoai  $theLoai
     * @return mixed
     */
    public function delete(User $user)
    {
//        return $user->checkPermissionAccess(config('permissions.access.delete-theloai'));
    }

    /**
     * Determine whether the user can restore the the loai.
     *
     * @param  \App\User  $user
     * @param  \App\TheLoai  $theLoai
     * @return mixed
     */
    public function restore(User $user, TheLoai $theLoai)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the the loai.
     *
     * @param  \App\User  $user
     * @param  \App\TheLoai  $theLoai
     * @return mixed
     */
    public function forceDelete(User $user, TheLoai $theLoai)
    {
        //
    }
}
