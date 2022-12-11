<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsletterSubscriber;
class NewsletterSubscriberTableseeder extends Seeder
{
    protected $model = NewsletterSubscriber::class;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsletterSubscriber::factory()
            ->count(60)
            ->create();
}
}
