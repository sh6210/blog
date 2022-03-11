<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\AboutResource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\DonationResource;
use App\Http\Resources\FooterResource;
use App\Http\Resources\MenuResource;
use App\Http\Resources\SliderResource;
use App\Models\About;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\Footer;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GeneralController
{
    public function home()
    {
//        return new HomeResource();
    }

    public function slider(): AnonymousResourceCollection
    {
        $posts = Post::where('is_at_slider', 1)->get();
        return SliderResource::collection($posts);
    }

    public function menus(): AnonymousResourceCollection
    {
        return MenuResource::collection(Menu::all());
    }

    public function about(): AboutResource
    {
        return new AboutResource(About::first());
    }

    public function contact(): ContactResource
    {
        return new ContactResource(Contact::first());
    }

    public function footer(): FooterResource
    {
        return new FooterResource(Footer::first());
    }

    public function donation(): DonationResource
    {
        return new DonationResource(Donation::first());
    }
}
