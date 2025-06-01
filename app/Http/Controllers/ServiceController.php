<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($service)
    {
        $services = [
            'wedding' => [
                'title' => 'Wedding Planning',
                'description' => 'Complete wedding management from start to finish.',
                'image' => '/images/wedding.jpg'
            ],
            'birthday' => [
                'title' => 'Birthday Party',
                'description' => 'Fun and themed birthday parties for all ages.',
                'image' => '/images/birthday.jpg'
            ],
            'engagement' => [
                'title' => 'Engagement Party',
                'description' => 'Celebrate your engagement in style.',
                'image' => '/images/engagement.jpg'
            ],
            'proposal' => [
                'title' => 'Proposal Planning',
                'description' => 'Make your proposal unforgettable with our help.',
                'image' => '/images/proposal.jpg'
            ],
            'gender-reveal' => [
                'title' => 'Gender Reveal Party',
                'description' => 'Plan an exciting reveal of your baby’s gender.',
                'image' => '/images/gender-reveal.jpg'
            ],
            'bride-to-be' => [
                'title' => 'Bride To Be Party',
                'description' => 'Host a beautiful pre-wedding party for the bride-to-be.',
                'image' => '/images/bride-to-be.jpg'
            ],
        ];

        if (!array_key_exists($service, $services)) {
            abort(404);
        }

        return view('services.show', ['service' => $services[$service]]);
    }
}
?>