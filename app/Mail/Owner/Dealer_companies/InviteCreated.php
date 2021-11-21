<?php

namespace App\Mail\Owner\Dealer_companies;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Management\Owner\Dealers\InviteDealerUser as Invite;

class InviteCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Invite $invite, $name,  $surname, $dealer_company_id)
    {
        $this->invite = $invite;
        $this->name = $name;
        $this->surname = $surname;
        $this->dealer_company_id = $dealer_company_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('you@example.com')
            ->view('emails.owner.dealer_companies.invite')->with([
                'invite'            => $this->invite,
                'name'              => $this->name,
                'surname'           => $this->surname,
                'dealer_company_id' =>$this->dealer_company_id
            ]);;
    }
}
