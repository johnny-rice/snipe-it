<?php

namespace Tests\Feature\Consumables\Api;

use App\Models\Location;
use App\Models\Asset;
use App\Models\User;
use Tests\TestCase;

class LocationsViewTest extends TestCase
{
    public function testViewingLocationRequiresPermission()
    {
        $location = Location::factory()->create();
        $this->actingAsForApi(User::factory()->create())
            ->getJson(route('api.locations.show', $location->id))
            ->assertForbidden();
    }

    public function testViewingLocationAssetIndexRequiresPermission()
    {
        $location = Location::factory()->create();
        $this->actingAsForApi(User::factory()->create())
            ->getJson(route('api.locations.viewassets', $location->id))
            ->assertForbidden();
    }

    public function testViewingLocationAssetIndex()
    {
        $location = Location::factory()->create();
        Asset::factory()->count(3)->assignedToLocation($location)->create();

        $this->actingAsForApi(User::factory()->superuser()->create())
            ->getJson(route('api.locations.viewassets', $location->id))
            ->assertOk()
            ->assertJsonStructure([
                'total',
                'rows',
            ])
            ->assertJson([
                'total' => 3,
            ]);
    }
}
