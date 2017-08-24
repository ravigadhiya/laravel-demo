<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    protected $table="usermeta";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'aboutme', 'phonenumber', 'address', 'city', 'state', 'zip', 'weburl', 'user_id', 'facebookurl', 'twitterurl', 'googleurl', 'profilepicture'
    ];

    public function User()
    {
        return $this->belongsTo('User');
    }



    public static function updateData($request, $id=NULL){
        $data = $request->all();
        if($id==NULL)
            return self::create($data);

        $usermeta = self::find($id);
        if(!$usermeta)
            return false;

        if(array_key_exists('firstname', $data)) $usermeta->firstname = $data['firstname'];
        if(array_key_exists('lastname', $data)) $usermeta->lastname = $data['lastname'];
        if(array_key_exists('aboutme', $data)) $usermeta->aboutme = $data['aboutme'];
        if(array_key_exists('phonenumber', $data)) $usermeta->phonenumber = $data['phonenumber'];
        if(array_key_exists('address', $data)) $usermeta->address = $data['address'];
        if(array_key_exists('city', $data)) $usermeta->city = $data['city'];
        if(array_key_exists('state', $data)) $usermeta->state = $data['state'];
        if(array_key_exists('zip', $data)) $usermeta->zip = $data['zip'];
        if(array_key_exists('weburl', $data)) $usermeta->weburl = $data['weburl'];
        if(array_key_exists('facebookurl', $data)) $usermeta->facebookurl = $data['facebookurl'];
        if(array_key_exists('twitterurl', $data)) $usermeta->twitterurl = $data['twitterurl'];
        if(array_key_exists('googleurl', $data)) $usermeta->googleurl = $data['googleurl'];
        if(!empty($request->file('profilepicture'))) {
            $usermeta->profilepicture = $request->file('profilepicture')->store("userprofile");
        }
        $usermeta->update();

        return $usermeta;
    }
}
