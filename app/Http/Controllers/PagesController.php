<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{
    public function index() {
        $data['categories'] = Category::all();

        $data['dir'] = "images/carousel*.jpg";
        $data['images'] = glob($data['dir']);
        
        return view('main.index', $data);
    }

    public function about() {
        
        return view('main.about');
    }

    public function services() {
        $data['txt1'] = "Cloud Copy offers a suite of professional copywriting services, 
        providing informative and compelling copy to businesses all over 
        the world.";

        $data['include'] = [
            'Four website blog articles per month (800-1000 words per blog)',
            'Four quarterly reports (approx 2500-3000 words per report)',
            'Social media images and captions, eight times per month',
            'Website blog content four times per month (800-1000 words per blog)',
            'Website content makeover (includes six core site pages)'
        ];

        $data['service1'] = "The rain cloud package will provide companies with a continuous stream of high-quality content to grow their business presence and increase engagement. This package is the most popular, a one-stop-shop for businesses who want to hand over the reins. Moreover, we come up with recommended article ideas so that the companies we work with do not have to worry about a thing.";
        $data['service2'] = "The blue-sky thinking package is an entirely personalised package designed to suit specific business needs. Cloud Copy sits down and consults companies on which type of content is the most relevant for their business. This package is highly consultative, and we hold our client's hand through the entire process. We focus on getting our clients marketing messages delivered correctly in a timely manner.";
        $data['service3'] = "Like snowfall in England, snow content clouds are seasonal, rare and special. This cloud provides businesses who already have a strong marketing team with an extra boost. Celebrate your businesses efforts and achievements every quarter by providing case studies and personal expertise unique to your company. Produce something outstanding to attract new business and retain your existing clients. 

        Quarterly reports allow companies to go into more depth on specific topics. By comparing quarterly information to the previous year's information for the same quarter, investors receive rich insights into a business's performance, growth, product developments and expertise. 
        ";
        $data['service4'] = "This creative cloud of content provides clients with social media posts, illustrations, filmography, and content creation for weekly blogs. The rainbow cloud is precisely as you imagine, visually impactful, reactive, fun, and innovative. This content package helps businesses to stand out. Some clients have described it as ‘moth to a flame.’ Let’s get creative.";
        
        return view('main.services', $data);
    }

    public function portfolio() {
        
        return view('main.portfolio');
    }

    public function contact() {
        
        return view('main.contact');
    }
}
