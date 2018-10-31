<?php

namespace App;

use App\Assigned_role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles(){

        return $this->belongsToMany(Role::class,'assigned_roles');
    }

    public function hasRoles(array $roles){
      
        foreach($roles as $role){

            foreach($this->roles as $userRole){
                if($userRole->name === $role){
                return true;
            }
            }

            
        }

        return false;
    }
    public function tieneRole($id){
        
        $roles = Assigned_role::all();
        /*
        foreach( $roles as $role ) {
           /* if($role->user_id === $id){
                return true;
            }
           
            
        }
        */
         $user = R::find($id);
         $user = User::all()->first();
            if($user )
        

        return false;

      /* if($role->user_id === $ind){
            return true;
       }
       return false;
       */     
        
    }
}
