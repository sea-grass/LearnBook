<?php
class Profile extends Eloquent {
    protected $table = 'profiles';
    protected $softDelete = true;

    /**
     * Returns this user's profile. Read this:
     * http://laravel.com/docs/eloquent#one-to-one
     * http://laravel.com/docs/eloquent#inserting-related-models
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
?>