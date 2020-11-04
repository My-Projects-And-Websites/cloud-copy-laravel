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
        $data['titles'] = [
            'Let The Canary Fly Outside Its Cage',
            'Content Is King',
            'The Art of Curating Content'
        ];

        $data['contents'] = [
            "When a company has limited free time to build and maintain a 
            blog, we take care of it for them. After observing and talking 
            to their canary, we will coax it out and provide it with a new 
            lease of life. Only once the canary is set free, will companies 
            prosper and reach their full potential.",
            "New content attracts new clients. It is that simple! A digital presence 
            is essential in ensuring that companies' expertise stands out from the 
            competition. Sales messages need to evolve to remain relevant. A blog 
            helps to ensure that companies are pushing the right buttons at all the 
            right times. Content creation is essentially the beating pulse of your 
            brand. Weekly blogs invite clients to listen to a company's views and 
            understand where their skill sets and expertise lie. Most importantly, 
            clients like to see how companies can resolve a range of businesses issues. 
            The old marketing adage ‘Find and Solve Your Client's Problem’s’ never ceases 
            to remain relevant. ",
            "Cloud Copy copywriters are from a marketing background. Our strategic approach 
            means that we don’t just write high-quality content; we also provide a strategic 
            pitch when presenting content ideas. Content creation is a trail of breadcrumbs 
            that should galvanise readers' interest to bring them back to the website time 
            and time again. "
        ];
        
        return view('main.about', $data);
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
