<?php
namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Signup extends Eloquent {

    protected $connection = 'mongodb';
    protected $collection = 'users';

}
