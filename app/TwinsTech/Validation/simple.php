<?php 
namespace TwinsTech\Validation;
use Illuminate\Support\Facades\Validator;
class simple{

    public function Fune($rawData)
    {
        $validator = Validator::make($rawData->all(), [
            'address'     => 'required|string|max:150',
            'description' => 'nullable|max:400',
            'email'       => 'email|max:255|unique:users',
            'cnumber'     => 'nullable|required',
            'cname'       => 'required|string',
            'pname'       => 'nullable|string|max:25',
            'name'        => 'required|min:5|max:25',
            'purl'        => 'required|url'
        ]);

        return validator();
    }







}