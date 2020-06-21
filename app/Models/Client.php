<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    const TEAM_RULES = [
        'address'     => 'required|string|max:150',
        'description' => 'nullable|max:400',
        'email'       => 'email|max:255|unique:users',
        'cnumber'     => 'nullable|required',
        'cname'       => 'required|string',
        'pname'       => 'nullable|string|max:25',
        'name'        => 'required|min:5|max:25',
        'purl'        => 'required|url'
    ];




    /**
     * Delete a client.
     *
     * @param int $id
     * @return mixed
     */
    public function deleteClient($id)
    {
        return $this->find($id)->delete();
    }



}
