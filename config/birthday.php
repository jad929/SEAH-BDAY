<?php

return [
    'name' => env('BIRTHDAY_NAME', 'Seah'),
    'from' => env('BIRTHDAY_FROM', 'Your favourite person'),
    'date' => env('BIRTHDAY_DATE', '2026-12-31'),
    'portrait' => env('BIRTHDAY_PORTRAIT', '/images/seah.jpg'),
    'letter' => [
        'You make the little things feel like the best things. The slow mornings, the ridiculous jokes, the long talks that somehow turn into our favourite memories — I wouldn’t trade any of it.',
        'I hope this next trip around the sun brings you the same warmth, wonder, and happiness you give to everyone lucky enough to know you. You deserve all of it, and then some.',
        'So here’s to you, to all the lovely things ahead, and to me finding a thousand new reasons to love you along the way.',
    ],
    'memories' => [
        [
            'eyebrow' => 'THE LITTLE THINGS',
            'title' => 'Your laugh, on repeat.',
            'description' => 'My favourite sound, and my favourite reason to make a terrible joke.',
            'image' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Friends sharing a happy moment together',
            'class' => 'memory-card--one',
        ],
        [
            'eyebrow' => 'OUR KIND OF ADVENTURE',
            'title' => 'Anywhere, with you.',
            'description' => 'The best plans usually start with “let’s just see where we end up.”',
            'image' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'A dreamy mountain lake surrounded by nature',
            'class' => 'memory-card--two',
        ],
        [
            'eyebrow' => 'A FAVOURITE FOREVER',
            'title' => 'Just us, being us.',
            'description' => 'No big occasion needed. Being with you is the occasion.',
            'image' => 'https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'A couple enjoying a quiet moment together',
            'class' => 'memory-card--three',
        ],
    ],
];
