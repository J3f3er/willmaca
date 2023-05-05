<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ListaTapaBocas;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ListaTapaBocasTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ListaTapaBocas::class);

        $component->assertStatus(200);
    }
}
