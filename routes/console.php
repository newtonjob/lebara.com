<?php

use App\Notifications\Newsletter;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Schedule;

Schedule::exec('bash deploy.sh');

Artisan::command('newsletter:send', function () {
    collect([
        /*"a.stuffman@vas2nets.com",
        "abisola.a@vas2nets.com",
        "adeniyi.a@vas2nets.com",
        "ayodele.o@vas2nets.com",
        "ayodele.s@vas2nets.com",
        "batunde.o@vas2nets.com",
        "chetachi.c@vas2nets.com",
        "chika.i@vas2nets.com",
        "compliance@vas2nets.com",
        "emmanuel.o@vas2nets.com",
        "emmanuel.s@vas2nets.com",
        "evangelist.g@vas2nets.com",
        "faith.i@vas2nets.com",
        "favour.a@vas2nets.com",
        "fola.s@vas2nets.com",
        "gabriel.o@vas2nets.com",
        "gbenga.o@vas2nets.com",
        "gladys.c@vas2nets.com",
        "grateful.a@vas2nets.com",
        "harry.o@vas2nets.com",
        "hosea.b@vas2nets.com",
        "hr@vas2nets.com",
        "ifeanyi.n@vas2nets.com",
        "iheanyi.o@vas2nets.com",
        "infrastructure@vas2nets.com",
        "ismail.b@vas2nets.com",
        "israel.t@vas2nets.com",
        "jane.a@vas2nets.com",
        "joseph.i@vas2nets.com",
        "joshua.u@vas2nets.com",
        "kachi.a@vas2nets.com",
        "legal@vas2nets.com",
        "lillian.n@vas2nets.com",
        "mandela.o@vas2nets.com",
        "mary.f@vas2nets.com",
        "michael.m@vas2nets.com",
        "modupe.a@vas2nets.com",
        "moses.t@vas2nets.com",
        "newton.j@vas2nets.com",
        "jobnewton3@gmail.com",
        "ocopara@vas2nets.com",
        "olubunmi.f@vas2nets.com",
        "olumide.a@vas2nets.com",
        "olusoji.m@vas2nets.com",
        "peter.s@vas2nets.com",
        "pmo@vas2nets.com",
        "rachel.i@vas2nets.com",
        "rasaq.s@vas2nets.com",
        "raymond.g@vas2nets.com",
        "samuel.e@vas2nets.com",
        "samuel.m@vas2nets.com",
        "shola.m@vas2nets.com",
        "account@lebara.ng",
        "ayo.stuffman@lebara.ng",
        "chetachi.chibueze@lebara.ng",
        "emmanuel.samuel@lebara.ng",
        "faith.irabor@lebara.ng",
        "gladys.cobbinah@lebara.ng",
        "hr@lebara.ng",
        "info@lebara.ng",
        "ismail.bello@lebara.ng",
        "joseph.ijih@lebara.ng",
        "legal@lebara.ng",
        "mary.akin-adesokan@lebara.ng",
        "mary.fasheitan@lebara.ng",
        "olubunmi.fatiregun@lebara.ng",
        "olushola.makanjuola@lebara.ng",
        "rasaq.sulaimon@lebara.ng",
        "samuel.alabi@lebara.ng",
        "teni.stuffman@lebara.ng",
        "victoria.ogom@lebara.ng",*/
        'aderemi.g@fortressmicrofinancebank.com',
        'kayode.s@fortressmicrofinancebank.com',
        'oluwafemi.s@fortressmicrofinancebank.com',
        'Patience.o@fortressmicrofinancebank.com',
        'taiwo.amira@fortressmicrofinancebank.com',
        'Hr@fortressmicrofinancebank.com',
        'oluwakemi.j@fortressmicrofinancebank.com',
        'david.o@fotressmicrofinancebank.com',
        'Kolawole.a@fortressmicrofinancebank.com',
        'Adeniyi.o@fortressmicrofinancebank.com',
        'Monica.u@fortressmicrofinance.com',
        'oluwatimilehin.s@fortressmicrofinancebank.com',
        'Ibrahim.a@fortressmicrofinancebank.com',
        'chioma.s@fortressmicrofinancebank.com'
    ])->each(function ($email) {
        Notification::route('mail', $email)->notify(new Newsletter);

        info('Sent to '.$email);

        $this->info('Sent to '.$email);
    });
});
