<?php

namespace Tests\Feature\Livewire\Partials;

use App\Http\Livewire\Partials\Header;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class HeaderTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Header::class);

        $component->assertStatus(200);
    }
}
