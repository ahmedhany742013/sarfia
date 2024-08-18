<?php
namespace App\Traits;

use App\Exceptions\Redirectingexception;
use Doctrine\DBAL\Exception\ReadOnlyException;
use Illuminate\Database\Eloquent\Builder;

trait PreventDemoModeChanges
{
    protected static function isActive(): bool {
        return env('DEMO_MODE') == 'On' ? true : false;
    }

    /**
     * Throws ReadOnlyException on create
     * @param array $attributes
     * @throws ReadOnlyException
     * @deprecated Method not allowed on read-only model
     */
    public static function create(array $attributes = [])
    {
        if (static::isActive()) {
             flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
             throw new Redirectingexception();
             
        }
        return parent::create($attributes);
    }


    public static function forceCreate(array $attributes)
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::forceCreate($attributes);
    }


    public function save(array $options = [])
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::save($options);
    }


    public function update(array $attributes = [], array $options = [])
    {

        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
             
        }
        return parent::update($attributes, $options);
    }


    public static function firstOrCreate(array $attributes, array $values = [])
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::firstOrCreate( $attributes,  $values);
    }


    public static function firstOrNew(array $attributes, array $values = [])
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::firstOrNew( $attributes,  $values);
    }


    public static function updateOrCreate(array $attributes, array $values = [])
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::updateOrCreate( $attributes,  $values );
    }


    public function delete()
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::delete();
    }

 
    public static function destroy($ids)
    {
        if (static::isActive()) {
            
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::destroy($ids);
    }


    public function push()
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::push();
    }


    public function insert()
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::insert();
    }


    public function truncate()
    {
        if (static::isActive()) {
            flash_message(translate('Data chaning action is not allowed in demo mode.','warning'));
            throw new Redirectingexception();
            
        }
        return parent::truncate();
    }
}