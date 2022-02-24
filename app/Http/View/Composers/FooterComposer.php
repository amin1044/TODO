<?php


namespace App\Http\View\Composers;

use Illuminate\View\View;
//use Modules\SiteInformation\Entities\SiteInformation;


class FooterComposer
{
    public function compose(View $view)
    {
//        $aboutUs = SiteInformation::where('type', SiteInformation::TYPES['about_us'])->first();
//        $contactUs = SiteInformation::where('type', SiteInformation::TYPES['contact_us'])->first();
//        $fast_links = SiteInformation::where('type', SiteInformation::TYPES['fast_links'])->first();

//        $view->with(["aboutUs" => $aboutUs,
//            "fast_links" => $fast_links, "contactUs" => $contactUs]);
    }
}
