<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\AboutResource;
use App\Http\Resources\BannerResource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\DonationResource;
use App\Http\Resources\FooterResource;
use App\Http\Resources\GeneralInfoResource;
use App\Http\Resources\MenuResource;
use App\Http\Resources\OrganizationResource;
use App\Http\Resources\SiteInfoResource;
use App\Http\Resources\SliderResource;
use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\Footer;
use App\Models\GeneralInfo;
use App\Models\Menu;
use App\Models\Organization;
use App\Models\Post;
use App\Models\SiteInfo;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GeneralController
{
    public function user()
    {
        return request()->user();
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

    public function banner(): AnonymousResourceCollection
    {
        return BannerResource::collection(Banner::all());
    }

    public function organization(): OrganizationResource
    {
        return new OrganizationResource(Organization::first());
    }

    public function generalInfo(): GeneralInfoResource
    {
        return new GeneralInfoResource(GeneralInfo::first());
    }

    public function siteInfo(): SiteInfoResource
    {
        return new SiteInfoResource(SiteInfo::with('author')->first());
    }
}
