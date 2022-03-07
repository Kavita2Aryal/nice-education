<?php

namespace App\Models;

use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model implements ImageableContract
{
    use HasFactory;
    use Imageable;


    public $columnsWithTypes = [
        'logo'             => 'image',
        'fav_icon'         => 'image',
        'name'             => 'string',
        'email'            => 'string',
        'alternate_email'  => 'string',
        'established_date' => 'string',
        'address'          => 'string',
        'phone'            => 'string',
        'mobile'           => 'string',
        'facebook_url'     => 'string',
        'instagram_url'    => 'string',
        'linkedin_url'     => 'string',
        'whatsapp_number'  => 'string',
        'map_url'          => 'string',
        'our_mission'      => 'string',
        'our_vision'       => 'string',
        'title_for_contact_us'            => 'string',
        'description_for_contact_us'      => 'string',
        'footer_text'                     => 'string',

        'homepage_banner'   =>'image',
        'banner_title'      =>'string',
        'sub_text'          =>'string',
        'btn_text'          =>'string',
        'btn_url'           =>'string',

        'visa_acceptance_description1'      =>'string',
        'visa_acceptance_image1'            =>'image',
        'visa_acceptance_description2'      =>'string',
        'visa_acceptance_image2'            =>'image',



    ];
}
