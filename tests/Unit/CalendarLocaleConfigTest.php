<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CalendarLocaleConfigTest extends TestCase
{
    #[Test]
    public function it_returns_default_locale_when_env_is_not_set(): void
    {
        putenv('CALENDAR_LOCALE');
        $this->assertSame('en-US', config('calendar.locale'));
    }

    #[Test]
    public function it_returns_configured_locale_from_config(): void
    {
        config(['calendar.locale' => 'en-GB']);
        $this->assertSame('en-GB', config('calendar.locale'));
    }

    #[Test]
    public function it_returns_us_locale_when_configured(): void
    {
        config(['calendar.locale' => 'en-US']);
        $this->assertSame('en-US', config('calendar.locale'));
    }

    #[Test]
    public function it_accepts_custom_locale_values(): void
    {
        config(['calendar.locale' => 'fr-FR']);
        $this->assertSame('fr-FR', config('calendar.locale'));
    }

    #[Test]
    public function it_returns_default_timezone_when_not_configured(): void
    {
        putenv('CALENDAR_TIMEZONE');
        $appTimezone = config('app.timezone');
        $this->assertSame($appTimezone, config('calendar.timezone'));
    }

    #[Test]
    public function it_returns_configured_timezone(): void
    {
        config(['calendar.timezone' => 'America/New_York']);
        $this->assertSame('America/New_York', config('calendar.timezone'));
    }

    #[Test]
    public function calendar_config_file_exists(): void
    {
        $this->assertFileExists(config_path('calendar.php'));
    }
}
