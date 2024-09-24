<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the application';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add public links
        $sitemap->add('/');
        $sitemap->add('/faq');
        $sitemap->add('/contact');
        $sitemap->add('/products');

        // Add links to products
        $products = \App\Models\Product::all();
        foreach ($products as $product) {
            $sitemap->add('/product/' . $product->slug);
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
