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
}
