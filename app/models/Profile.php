<?php
class User extends Eloquent {
    protected $table = 'profiles';
    protected $softDelete = true;
}
?>