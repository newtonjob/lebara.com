<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class Newsletter extends Notification
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
            ->subject('Get Ready for the Lebara Nigeria Launch 🚀')
            ->greeting(new HtmlString("<img alt='header' src='{$header}' />"))
            ->line('# Dear Team,')
            ->replyTo('hr@vas2nets.com')
            ->line('Thank you for being part of the VAS2Nets family! 🎉 As we prepare to launch Lebara Nigeria, we’re excited to bring affordable, reliable, and customer-first mobile solutions to Nigeria.')
            ->line('To build momentum and ensure a successful launch, we encourage everyone to follow and engage with us on social media. Your support will help amplify our message and connect with our target audience.')
            ->line('📲 Follow us here:')
            ->line('- Instagram - [lebara.ng](https://instagram.com/lebara.ng)')
            ->line('- Facebook - [Lebara-Ng](https://web.facebook.com/people/Lebara-Ng/61574122177633)')
            ->line('- Tiktok - [Lebara_Nigeria](https://tiktok.com/@Lebara_Nigeria)')
            ->line('- X (formerly Twitter) - [Lebara_Nigeria](https://x.com/Lebara_Nigeria)')
            ->line('- Youtube - [@Lebara-Nigeria](https://youtube.com/@Lebara-Nigeria)')
            ->line('By following and engaging with our pages, you\'ll get inside gist, exclusive offers, and invite for launch events. Let’s make this a movement!')
            ->line('Thanks for your support, exciting things are ahead!')
            ->line(new HtmlString("<b style='color: #019ce1'>Mary Fasheitan O. Akin-Adesokan</b><br>Chief Operating Officer<br>Lebara, Nigeria."))
            ->salutation(' ')
            ->line(new HtmlString("<img alt='footer' src='{$footer}' />"));
    }
}
