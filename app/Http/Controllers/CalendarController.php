<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        // Generate sample events for the calendar
        $events = $this->generateSampleEvents();
        
        return view('calendar', ['events' => $events]);
    }
    
    private function generateSampleEvents()
    {
        $events = [];
        $currentYear = date('Y');
        $currentMonth = date('m');
        
        // Sample event data
        $programmingTitles = [
            "JavaScript Workshop",
            "Python Coding Challenge",
            "Web Dev Bootcamp",
            "Data Science Meetup",
            "Algorithms Study Group",
        ];
        
        $creativeDesignTitles = [
            "Graphic Design Workshop",
            "UI/UX Design Sprint",
            "Digital Art Showcase",
            "Creative Writing Seminar",
            "Photography Masterclass",
        ];
        
        $cities = [
            "New York",
            "Los Angeles",
            "San Francisco",
            "Chicago",
            "London",
            "Paris",
            "Tokyo",
            "Sydney",
            "Berlin",
            "Toronto",
        ];
        
        $colors = ["indigo", "primary", "teal", "yellow", "pink"];
        
        // Generate 10 random events
        for ($i = 1; $i <= 10; $i++) {
            $day = rand(1, 28); // Prevent issues with different month lengths
            $start = sprintf('%s-%s-%02d', $currentYear, $currentMonth, $day);
            $end = sprintf('%s-%s-%02d', $currentYear, $currentMonth, min($day + rand(0, 2), 28));
            
            $isProgrammingEvent = rand(0, 1);
            $titles = $isProgrammingEvent ? $programmingTitles : $creativeDesignTitles;
            $title = $titles[array_rand($titles)];
            $color = $colors[array_rand($colors)];
            $city = $cities[array_rand($cities)];
            $location = "$title - $city";
            
            $events[] = [
                'id' => $i,
                'title' => $title,
                'start' => $start,
                'end' => $end,
                'className' => "fc-event-$color",
                'extendedProps' => [
                    'location' => $location,
                    'description' => "This is a sample event description for $title in $city."
                ]
            ];
        }
        
        return $events;
    }
}

