<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'last_updated' => 'Senaste uppdaterad :timestamp',
        'status'       => [
            0 => 'Okänd',
            1 => 'Tillgänglig',
            2 => 'Prestandaproblem',
            3 => 'Begränsat avbrott',
            4 => 'Större avbrott',
        ],
        'group' => [
            'other' => 'Andra komponenter',
        ],
        'select_all'   => 'Markera alla',
        'deselect_all' => 'Avmarkera alla',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Inga rapporterade händelser',
        'past'         => 'Tidigare händelser',
        'stickied'     => 'Fästa händelser',
        'scheduled'    => 'Planerade arbeten',
        'scheduled_at' => ', planerat :timestamp',
        'posted'       => 'Publicerad :timestamp',
        'posted_at'    => 'Publicerat :timestamp',
        'status'       => [
            1 => 'Undersöker',
            2 => 'Identifierat',
            3 => 'Bevakar',
            4 => 'Åtgärdat',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Planerat',
            1 => 'Pågående',
            2 => 'Färdigställt',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]Alla tjänster tillgängliga|[2,*]Alla tjänster är för närvarande tillgängliga',
        'bad'   => '[0,1]Problem med en del tjänster|[2,*]En del tjänster upplever för närvarande problem',
        'major' => '[0,1]Större problem med tjänster|[2,*]En del tjänster upplever för närvarande större problem',
    ],

    'api' => [
        'regenerate' => 'Regenerera API nyckel',
        'revoke'     => 'Återkalla API nyckel',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Senaste timmen',
            'hourly'    => 'Senaste 12 timmarna',
            'weekly'    => 'Vecka',
            'monthly'   => 'Månad',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Prenumerera på händelser och incidentsuppdateringar',
        'unsubscribe'         => 'Avprenumerera',
        'button'              => 'Prenumerera',
        'manage_subscription' => 'Hantera prenumeration',
        'manage'              => [
            'notifications'       => 'Notifikationer',
            'notifications_for'   => 'Hantera notifikationer för:',
            'no_subscriptions'    => 'Du är prenumererad för samtliga uppdateringar.',
            'update_subscription' => 'Uppdatera prenumation',
            'my_subscriptions'    => 'Du prenumerar för närvarande på följande uppdateringar.',
            'manage_at_link'      => 'Hantera dina uppdateringar på :link',
        ],
        'email' => [
            'subscribe'          => 'Prenumerera på epostuppdateringar.',
            'subscribed'         => 'Du prenumerar nu på epostuppdateringar, kontrollera din e-post för att bekräfta din prenumeration.',
            'verified'           => 'Din epostprenumeration har nu bekräftats. Tack!',
            'manage'             => 'Hantera din prenumeration.',
            'unsubscribe'        => 'Avprenumerera på mail.',
            'unsubscribed'       => 'Din epostprenumeration är nu uppsagd.',
            'failure'            => 'Något gick fel med prenumerationen.',
            'already-subscribed' => 'Kan inte lägga till :email för att adressen redan är prenumererad.',
        ],
    ],

    'signup' => [
        'title'    => 'Skapa konto',
        'username' => 'Användarnamn',
        'email'    => 'E-post',
        'password' => 'Lösenord',
        'success'  => 'Ditt konto har skapats.',
        'failure'  => 'Något gick fel när kontot skapades.',
    ],

    'system' => [
        'update' => 'En nyare version av Cachet finns tillgänglig. Du kan läsa mer om uppdateringen <a href="https://docs.cachethq.io/docs/updating-cachet">här</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Stäng',
        'subscribe' => [
            'title'  => 'Prenumerera på komponentuppdateringar.',
            'body'   => 'Skriv in din e-postadress för att prenumerera på uppdateringar för denna komponent. Om du redan är prenumererad så får du mail för denna komponent.',
            'button' => 'Prenumerera',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Detaljer och uppdateringar om incidentent :name som uppstod :date',
            'schedule'  => 'Detaljer om det planerade arbetet :name som startar :startDate',
            'subscribe' => 'Premumerera på :app för att få uppdateringar om incidenter och planerade arbeten.',
            'overview'  => 'Håll dig uppdaterad med uppdateringar för :app.',
        ],
    ],

    // Other
    'home'            => 'Hem',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Tider visas i :timezone.',
    'about_this_site' => 'Om denna sidan',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
