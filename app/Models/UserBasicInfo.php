<?php
namespace App\Models;

use App\models\My_Model;

class UserBasicInfo extends My_Model
{
    protected $table = 'user_basic_detail';
    public $timestamps = false;
    protected $primaryKey = 'User_DetailID';
    protected $fillable = [
        'FirstName','MiddleName','LastName','CNIC','DOB','City','Country','Age','LocalCouncil','JK','Address'
    ];
}
