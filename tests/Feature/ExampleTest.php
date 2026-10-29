<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('aria-label="Open the birthday door"', false)
            ->assertDontSee('click here kikay')
            ->assertDontSee('door-label')
            ->assertSee('--maroon: #672638', false)
            ->assertSee('linear-gradient(180deg, #471721', false)
            ->assertDontSee('floral-frame')
            ->assertSee('/dashboard')
            ->assertDontSee('Happy Birthday,')
            ->assertDontSee('Enter your birthday surprise');
    }

    public function test_the_dashboard_is_available_after_entering(): void
    {
        $response = $this->get('/dashboard');

        $response
            ->assertOk()
            ->assertSee('<main class="birthday-page">', false)
            ->assertSee('Happiest Birthday,')
            ->assertSee('My Dearest, Seah &lt;33', false)
            ->assertSee('src="/images/seah.jpg"', false)
            ->assertSee('id="play-birthday-song"', false)
            ->assertSee('click please!!')
            ->assertSee('href="https://open.spotify.com/playlist/4GfrPSoGmXNOzt4GlzaZXG?si=7kg9jPgbR721fFDhNGWuzA&utm_source=copy-link&pi=die7EDKiRCKpL"', false)
            ->assertSee('target="_blank"', false)
            ->assertSee('id="hoodie-card"', false)
            ->assertSee('id="hoodie-reward"', false)
            ->assertSee('Get the hoodie')
            ->assertSee('id="battle-impact"', false)
            ->assertSee('class="smash-bottle"', false)
            ->assertSee('ah kulit ka? kukunin mo pa hoodie ko?')
            ->assertSee('BONK!')
            ->assertSee('data-action="absolut"', false)
            ->assertSee('HAPPY BIRTHDAY MOWM')
            ->assertSee('Happiest birthday, baby!')
            ->assertSee('I want you to know that I will go beyond measure for you, baby!')
            ->assertSee('I wish you all good things in life, baby! Mwa!')
            ->assertSee('THERE’S SOME CUTIE PIES WHO WANTS TO GREET YOU')
            ->assertSee('Scroll down ↓')
            ->assertSee('Birthday cake with a lit candle for the 20th birthday')
            ->assertSee('class="cake-candle" aria-hidden="true">20</span>', false)
            ->assertSeeInOrder([
                'id="birthday-letter-card"',
                'THERE’S SOME CUTIE PIES WHO WANTS TO GREET YOU',
                'Scroll down ↓',
                'aria-label="Birthday cat playground"',
            ])
            ->assertDontSee('Seeing this little memory makes me smile.')
            ->assertDontSee('Cat playground')
            ->assertDontSee('chasing their favorite toy')
            ->assertDontSee('id="photo-viewer"', false)
            ->assertDontSee('id="birthday-song"', false)
            ->assertDontSee('embed.music.apple.com')
            ->assertDontSee('audio-ssl.itunes.apple.com')
            ->assertDontSee('<audio')
            ->assertDontSee('controls')
            ->assertSee('--pink: #29121e', false)
            ->assertSee('linear-gradient(180deg, #321421 0%, #24101c 48%, #1b0d16 100%)', false)
            ->assertDontSee('Friends sharing a happy moment together')
            ->assertDontSee('Your birthday overview')
            ->assertDontSee('Birthday dashboard');
    }
}
