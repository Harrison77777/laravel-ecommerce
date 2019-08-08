<?php

namespace App;
use App\Events\EmailVerifyEvent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use Notifiable;

    protected $fillable = 
    [
        'username',
        'email',
        'phone_no',
        'division',
        'district',
        'shipping_address',
        'street_address',
        'zip_code',
        'ip_address',
        'password',
        'avatar',
        'remember_token',
        'status'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
    
    //protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
   
    // protected $dispatchesEvents = [
    //     'created' => EmailVerifyEvent::class
    // ];
    
}
