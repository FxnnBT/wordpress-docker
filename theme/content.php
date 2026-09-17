<?php
/**
 * ALLE TEKSTEN VAN DE SITE STAAN HIER.
 * Dit is het enige bestand dat je hoeft aan te passen.
 * Tekst tussen de aanhalingstekens vervangen, verder niets veranderen.
 */
return [
    'naam'   => 'Fynn Tervoort',
    'slogan' => 'Software developer in opleiding, op zoek naar een stage',
    'email'  => 'info@fynnworks.nl',

    // Homepagina
    'intro' => 'Hoi! Ik ben een tweedejaars software development student. Ik bouw graag webapplicaties en zoek een stageplek waar ik kan groeien.',

    // Over mij-pagina (elke regel wordt een alinea)
    'over_mij' => [
        'Ik ben Fynn, 17 jaar en studeer Software Development aan [school].',
        'Ik werk het liefst met PHP en JavaScript. Naast programmeren doe ik graag zeilen.',
        'Ik zoek een stage vanaf nu waar ik mee kan werken aan echte projecten.',
    ],

    // Projecten (de eerste drie staan ook op de homepagina)
    'projecten' => [
        [
            'titel' => 'Project één',
            'tekst' => 'Website van mijn webbureau. Hier heb ik geleerd hoe je een website bouwt in next.js en host op een raspberry pi.',
            'tags'  => 'Next.js, React, Tailwind CSS',
            'link'  => 'https://www.fynnworks.nl/',
        ],
        [
            'titel' => 'Project twee',
            'tekst' => 'Korte beschrijving van wat dit project doet en wat je ervan geleerd hebt.',
            'tags'  => 'JavaScript, HTML, CSS',
            'link'  => 'https://github.com/FxnnBT',
        ],
        [
            'titel' => 'Project drie',
            'tekst' => 'Korte beschrijving van wat dit project doet en wat je ervan geleerd hebt.',
            'tags'  => 'C#, .NET',
            'link'  => 'https://github.com/FxnnBT',
        ],
    ],

    // Contactsectie
    'contact' => 'Op zoek naar een stagiair? Ik hoor graag van je.',
];
