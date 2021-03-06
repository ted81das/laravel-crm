<?php

namespace VentureDrake\LaravelCrm\Observers;

use VentureDrake\LaravelCrm\Models\Email;

class EmailObserver
{
    /**
     * Handle the email "creating" event.
     *
     * @param  \VentureDrake\LaravelCrm\Email  $email
     * @return void
     */
    public function creating(Email $email)
    {
        if (! app()->runningInConsole()) {
            $email->user_created_id = auth()->user()->id ?? null;
        }
    }
    
    /**
     * Handle the email "created" event.
     *
     * @param  \VentureDrake\LaravelCrm\Models\Email  $email
     * @return void
     */
    public function created(Email $email)
    {
        //
    }

    /**
     * Handle the email "updated" event.
     *
     * @param  \VentureDrake\LaravelCrm\Models\Email  $email
     * @return void
     */
    public function updated(Email $email)
    {
        //
    }

    /**
     * Handle the email "deleted" event.
     *
     * @param  \VentureDrake\LaravelCrm\Models\Email  $email
     * @return void
     */
    public function deleted(Email $email)
    {
        //
    }

    /**
     * Handle the email "restored" event.
     *
     * @param  \VentureDrake\LaravelCrm\Models\Email  $email
     * @return void
     */
    public function restored(Email $email)
    {
        //
    }

    /**
     * Handle the email "force deleted" event.
     *
     * @param  \VentureDrake\LaravelCrm\Models\Email  $email
     * @return void
     */
    public function forceDeleted(Email $email)
    {
        //
    }
}
