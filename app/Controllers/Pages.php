<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $menuItems = [
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'About us', 'url' => 'about-us'],
        ['label' => 'Products & Services', 'url' => 'products_and_services'],
        ['label' => 'News', 'url' => 'news'],
        ['label' => 'Blogs', 'url' => 'blogs'],
    ];
    private $contactItem = [
        'label' => 'Contact us', 'url' => 'contact-us'
    ];
    private $product_and_services_details = [
        [
            'label' => 'Market Access Through E&#8209;Commerce',
            'url' => 'market-access'
        ],
        [
            'label' => 'Farmers Health',
            'url' => 'farmers-health'
        ],
        [
            'label' => 'Entrepreneurship Support',
            'url' => 'entrepreneurship-support'
        ],
        [
            'label' => 'Infrastructure Support',
            'url' => 'infrastructure-support'
        ],
        [
            'label' => 'Literacy and knowledge Hub',
            'url' => 'literacy-and-knowledge-hub'
        ],
        [
            'label' => 'Warehousing',
            'url' => 'warehousing'
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
    public function contact_us()
    {
        return view('pages/contact', ['title' => 'Contact Us', 'menuItems' => $this->menuItems, 'contactItem' => $this->contactItem]);
    }
    private function getDynamicContentForPage($page)
    {
        $pages = [
            'market-access' => [
                'title' => 'Market Access Through E&#8209;Commerce',
                'view' => 'sections/products_and_services/market-access'
            ],
            'entrepreneurship-support' => [
                'title' => 'Entrepreneurship Support',
                'view' => 'sections/products_and_services/entrepreneurship-support'
            ],
            'farmers-health' => [
                'title' => 'Farmers Health',
                'view' => 'sections/products_and_services/farmers-health'
            ],
            'literacy-and-knowledge-hub' => [
                'title' => 'Literacy and Wealth Management',
                'view' => 'sections/products_and_services/literacy-and-knowledge-hub'
            ],
            'infrastructure-support' => [
                'title' => 'Infrastructure Support',
                'view' => 'sections/products_and_services/infrastructure-support'
            ],
            'warehousing' => [
                'title' => 'Warehousing',
                'view' => 'sections/products_and_services/warehousing'
            ],
        ];

        return $pages[$page] ?? ['title' => 'Page Not Found', 'view' => 'sections/products_and_services/not_found'];
    }
}
