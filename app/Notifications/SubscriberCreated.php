<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class SubscriberCreated extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $header = asset('email-banner.jpeg');
        $footer = asset('email-footer.jpeg');

        return (new MailMessage)
            ->subject('Welcome to Lebara Nigeria – You’re on the List! 🚀')
            ->greeting(new HtmlString("<img alt='header' src='{$header}' />"))
            ->line('# Dear Sabi Friend,')
            ->line('Thank you for signing up to be part of the Lebara Nigeria family! 🎉 Your interest means the world to us, and we’re excited to have you on this journey as we bring affordable, reliable, and customer-first mobile solutions to Nigeria.')
            ->line('As a valued early subscriber, you’ll be the first to hear about our latest updates, exclusive offers, and launch events. We’re building something special, and you’re now at the heart of it.')
            ->line('Stay tuned—we’ll be in touch soon! In the meantime, feel free to connect with us on')
            ->line('- Instagram - [lebara.ng](https://instagram.com/lebara.ng)')
            ->line('- Facebook - [Lebara-Ng](https://web.facebook.com/people/Lebara-Ng/61574122177633)')
            ->line('- Tiktok - [Lebara_Nigeria](https://tiktok.com/@Lebara_Nigeria)')
            ->line('- X (formerly Twitter) - [Lebara_Nigeria](https://x.com/Lebara_Nigeria)')
            ->line('- Youtube - [@Lebara-Nigeria](https://youtube.com/@Lebara-Nigeria)')
            ->line('- LinkedIn - [Lebara Nigeria](https://linkedin.com/company/lebara-nigeria')
            ->line('and spread the word.')
            ->line('Welcome to a new era of connectivity!')
            ->line(new HtmlString("Best,<br><b style='color: #019ce1'>The Lebara Nigeria Team</b><br>www.lebara.ng"))
            ->salutation(' ')
            ->line(new HtmlString("<img alt='footer' src='{$footer}' />"));
    }
}
