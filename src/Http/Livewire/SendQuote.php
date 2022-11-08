<?php

namespace VentureDrake\LaravelCrm\Http\Livewire;

use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use VentureDrake\LaravelCrm\Traits\NotifyToast;

class SendQuote extends Component
{
    use NotifyToast;
    
    public $quote;

    public $to;

    public $subject;
    
    public $message;

    public $cc;

    public $signedUrl;

    public function mount($quote)
    {
        $this->quote = $quote;
    }

    /**
     * Returns validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'to'=> 'required|string',
            'subject'=> 'required|string',
            'message'=> 'required|string',
        ];
    }

    public function send()
    {
        $this->validate();
        
        $this->generateUrl();

        /*Notification::route('mail', $this->email)
            ->notify(new OrderSharedNotification(auth()->user(), auth()->user()->currentTeam, $this->order, $this->signedUrl));*/

        $this->notify(
            'Quote sent',
        );
        
        $this->resetFields();

        $this->dispatchBrowserEvent('quoteSent');
    }

    public function generateUrl()
    {
        $this->signedUrl = URL::temporarySignedRoute(
            'laravel-crm.public.quotes.show', now()->addDays(14), [
                'quote' => $this->quote,
            ]
        );
    }

    private function resetFields()
    {
        $this->reset('to','subject','message','cc');
    }

    public function render()
    {
        return view('laravel-crm::livewire.send-quote');
    }
}