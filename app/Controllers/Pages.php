<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $menuItems = [
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'About us', 'url' => 'about-us'],
        ['label' => 'Products & Services', 'url' => 'products_and_services'],
        ['label' => 'Activities & advisory', 'url' => 'activities-and-advisory'],
        ['label' => 'Gallery', 'url' => 'gallery'],
        ['label' => 'News', 'url' => 'news'],
        ['label' => 'Blogs', 'url' => 'blogs'],


    ];
    private $contactItem = [
        'label' => 'Contact us', 'url' => 'contact-us'
    ];
    private $product_and_services_details = [
        [
            'label' => 'Farmer Health',
            'url' => 'farmers-health'
        ],
        [
            'label' => 'Financial Inclusion',
            'url' => 'financial-inclusion'
        ],
        [
            'label' => 'Access to Market and Training',
            'url' => 'access-to-markets'
        ],
        [
            'label' => 'Mindset Change',
            'url' => 'mindset-change'
        ],
        [
            'label' => 'Value Addition in the Agro Business Sector',
            'url' => 'value-addition-agro-business'
        ]
    ];

    
    public function index(): string
    {
        return view('pages/home', ['title' => 'Home','menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);

    }

    public function about_us()
    {
        return view('pages/about_us', ['title' => 'About Us', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }

    public function activities_and_advisory()
    {
        return view('pages/activities_and_advisory', ['title' => 'Our Activities & advisory services', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    public function products_and_services()
    {
        return view('pages/products_and_services', ['title' => 'Products & Services', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    public function products_and_services_details(string $page)
    {
        // Fetch or generate dynamic content based on $page
        $dynamicContent = $this->getDynamicContentForPage($page);

        return view('pages/products_and_services_details', [
            'title' => $dynamicContent['title'],
            'menuItems' => $this->menuItems,
            'contactItem' => $this->contactItem,
            'productAndServicesDetails' => $this->product_and_services_details,
            'currentDetailUrl' => $page,
            'dynamicContent' => $dynamicContent['view']

        ]);
    }

    public function news()
    {
        return view('pages/news', ['title' => 'News', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    public function blogs()
    {
        return view('pages/blogs', ['title' => 'Blog', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    public function gallery()
    {
        return view('pages/gallery', ['title' => 'Gallery', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    public function contact_us()
    {
        return view('pages/contact', ['title' => 'Contact Us', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    private function getDynamicContentForPage($page)
    {
        $pages = [
            'financial-inclusion' => [
                'title' => 'Financial Inclusion',
                'view' => 'sections/products_and_services/financial-inclusion'
            ],
            'access-to-markets' => [
                'title' => 'Access to Market and Training',
                'view' => 'sections/products_and_services/access-to-markets'
            ],
            'farmers-health' => [
                'title' => 'Farmers Health',
                'view' => 'sections/products_and_services/farmers-health'
            ],
            'mindset-change' => [
                'title' => 'Mindset Change',
                'view' => 'sections/products_and_services/mindset-change'
            ],
            'value-addition-agro-business' => [
                'title' => 'Value Addition in the Agro Business Sector',
                'view' => 'sections/products_and_services/value-addition-agro-business'
            ],
        ];

        return $pages[$page] ?? ['title' => 'Page Not Found', 'view' => 'sections/products_and_services/not_found'];
    }
}
