<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yojana extends Model
{
    protected $fillable = [

        'category_id',
        'state_id',
        'title',
        'slug',
        'featured_image',
        'short_description',
        'overview',
        'benefits',
        'eligibility',
        'documents_required',
        'application_process',
        'financial_benefits',
        'important_dates',
        'status_check',
        'official_website',
        'helpline',
        'meta_title',
        'meta_description',
        'status'

    ];
}
