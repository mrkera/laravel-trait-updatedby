<?php
namespace Koodoo\laravelTraitUpdatedBy;

trait UpdatedBy
{
    protected static function bootUpdatedBy()
    {
		static::saving(function ($model) 
        {
        	if(!\Auth::guest())
	        {
	            $model->updated_by = \Auth::user()->id;
            	$model->company_id = \Auth::user()->company_id;
	        }
            
        });
    }
}
