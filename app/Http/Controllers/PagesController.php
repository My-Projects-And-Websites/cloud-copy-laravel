<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{
    public function index() {
        $data['category_titles'] = [
            "Website News Blog",
            "Articles",
            "Case Studies",
            "Research Reports",
            "Webpage Content",
            "Social Media"
        ];

        $data['category_desc'] = [
            "We create content that people genuinely want to read. A website’s news blog is 
            the equivalent of a vase of flowers in a room. Use content as a magnet to attract 
            new customers and increase engagement. Amplify your brand voice and accelerate growth 
            by optimizing every customer interaction.",
            "People love to talk. Let's start a conversation with eloquence. At Cloud Copy we produce 
            engaging, newsworthy articles. We come up with interesting ideas by sniffing out topical 
            issues to ensure that our messaging is ahead of the curve. Ensure that your business has 
            the coverage it needs to get people talking about your business.",
            "Celebrate your business's success. We compile concise case studies which highlight your 
            business expertise and market activity that will set your company apart from its competitors. 
            Without case studies, your audience will not see a business in action. A case study 
            demonstrates unique business skills and expertise. The study will highlight real life 
            challenges a company has faced and how they resolved these issues. Most importantly, case 
            studies will help your audience to identify that your business services meet their needs.",
            "Our intelligent research reports analyse the relevant market activity and projections incorporating 
            expert commentary. This type of report demonstrates thought leadership and elevates a business by 
            producing intelligent market assets. Research content is most suited to medium to large sized corporate 
            companies looking to raise the bar.",
            "Your website is an opportunity to grab the audience and instil them with confidence. Cloud Copy looks 
            at whether your landing pages accurately communicate your business expertise or products. We believe that 
            websites copy should be straight forward. Don’t bog readers down with complicated language and intricate 
            business propositions. The landing pages should clearly showcase a range of services that a business can 
            offer, while reflecting their branding by adopting a distinctive tone of voice.",
            "The ‘moth to a flame’. We use social media as an opportunity to connect the dots. We can boost your social 
            media traffic and increase your digital presence. Sharp, intelligent and concise captions which drive your 
            audience to the website means that your business is never static. Keep opening up conversation. Let’s get creative."
        ];
        
        return view('main.index', $data);
    }

    public function about() {
        $data['titles'] = [
            'Content Is King',
            'The Art of Curating Content'
        ];

        $data['contents'] = [
            "New content attracts new clients. It is that simple! A digital presence is 
            essential to help companies' expertise to stand out from the competition. 
            Sales messages need to evolve to remain relevant.
            
            Content creation is the beating pulse of a brand. A website blog helps to 
            ensure that companies are pushing the right buttons at all the right times. 
            Most importantly, clients like to see how companies can support them. The old 
            marketing adage ‘Find and solve your client's problems.’ never ceases to remain 
            relevant.",
            "Cloud Copy copywriters are from a marketing background. Our strategic approach 
            means that we create prudent content, which can be used as a trail of breadcrumbs 
            to galvanise readers' interest. Bring your audience back to the website time and 
            time again."
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

        By comparing quarterly information to the previous year's information for the same quarter, investors receive rich insights into a business's performance, growth, product developments and expertise. 
        ";
        $data['service4'] = "This creative cloud of content provides clients with social media posts, illustrations, filmography, and content creation for weekly blogs. The rainbow cloud is precisely as you imagine, visually impactful, reactive, fun, and innovative. This content package helps businesses to stand out. Some clients have described it as ‘moth to a flame.’ Let’s get creative.";
        
        return view('main.services', $data);
    }

    public function portfolio() {
        
        return view('main.portfolio');
    }

    public function contact() {
        $data['longtext'] = [
            "When a company has limited free time to build and maintain a 
            blog, we take care of it for them. After observing and talking 
            to their canary, we will coax it out and provide it with a new 
            lease of life. Only when the canary is set free will companies 
            prosper and reach their full potential.",
            "Let the Canary Fly Outside Its Cage"
        ];
        
        return view('main.contact', $data);
    }
}
