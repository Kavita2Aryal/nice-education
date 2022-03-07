<?php

namespace App\Models;

use App\Custom\Contracts\FileableContract;
use App\Custom\Contracts\ImageableContract;
use App\Custom\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyAbroad extends Model implements ImageableContract
{
    use Imageable;
    use HasFactory;

    protected $guarded = ['id'];

    public $columnsWithTypes = [
        'country_name'                  => 'string',
        'slug'                          => 'string',
        'why_message'                   => 'string',
        'welcome_message'               => 'string',
        'education_system_title'        => 'string',
        'education_system_description'  => 'string',
        'education_system_image'        => 'image',

        'popular_course_title'          => 'string',
        'popular_course_description'    => 'string',

        'document_required_title'       => 'string',
        'document_required_description' => 'string',

        'intake_title'                  => 'string',
        'intake_description'            => 'string',
        'first_intake_image'            => 'image',
        'second_intake_image'           => 'image',
        'first_intake_session'          => 'string',
        'second_intake_session'         => 'string',


        'work_visa_section_title'       => 'string',
        'work_visa_section_description' => 'string',
        'yellow_section_content'        => 'string',
        'image_below_yellow_section'    => 'image',
        'title_below_yellow_section'    => 'string',
        'description_below_yellow_section'   => 'string',


    ];

    public function faqs()
    {
        return $this->hasMany(TestPreparationFaq::class,'type_id')->where('type','study');
    }

}
