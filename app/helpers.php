<?php

use App\Models\About;
use App\Models\Basic;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\MyWorld;
use App\Models\Service;
use App\Models\WhoWork;
use App\Models\Programming;

if(!function_exists('getAppData'))
{
    function getAppData()
    {
        return Basic::first();
    }
}

if(!function_exists('getContact'))
{
    function getContact()
    {
        return Contact::first();
    }
}

if(!function_exists('getAbout'))
{
    function getAbout()
    {
        return About::first();
    }
}

if(!function_exists('getWhoWork'))
{
    function getWhoWork()
    {
        return WhoWork::first();
    }
}

if(!function_exists('getMyWorld'))
{
    function getMyWorld()
    {
        return MyWorld::first();
    }
}

if(!function_exists('getLangs'))
{
    function getLangs()
    {
        return Programming::where('status', 1)->get();
    }
}

if(!function_exists('getSkills'))
{
    function getSkills()
    {
        return Skill::where('status', 1)->get();
    }
}

if(!function_exists('getServices'))
{
    function getServices()
    {
        return Service::where('status', 1)->get();
    }
}