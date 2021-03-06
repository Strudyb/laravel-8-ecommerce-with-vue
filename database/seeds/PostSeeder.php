<?php

use Carbon\Carbon;
use Faker\Factory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =
            [
                [
                    'id' => 1,
                    'title' => 'Login Register',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'login-register',
                    'seo_title' => 'Register Seo Title',
                    'seo_description' => 'Register Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'title' => 'Login',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'login',
                    'seo_title' => 'Login Seo Title',
                    'seo_description' => 'Login Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'title' => 'Blog',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'blog',
                    'seo_title' => 'Videos Seo Title',
                    'seo_description' => 'Videos Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 4,
                    'title' => 'Cart',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'cart',
                    'seo_title' => 'user guide Seo Title',
                    'seo_description' => 'user guide Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 5,
                    'title' => 'Checkout',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'checkout',
                    'seo_title' => 'terms Seo Title',
                    'seo_description' => 'terms Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 6,
                    'title' => 'contact',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'contact',
                    'seo_title' => 'pricing Seo Title',
                    'seo_description' => 'pricing Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 7,
                    'title' => 'faq',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'faq',
                    'seo_title' => 'legal news Seo Title',
                    'seo_description' => 'legal news Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 8,
                    'title' => 'Forget Password',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'forget-password',
                    'seo_title' => 'legal contracts Seo Title',
                    'seo_description' => 'legal contracts Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 9,
                    'title' => 'My Account',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'my-account',
                    'seo_title' => 'lawyers Seo Title',
                    'seo_description' => 'lawyers Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 10,
                    'title' => 'Product',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'product',
                    'seo_title' => 'invoice Seo Title',
                    'seo_description' => 'invoice Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 11,
                    'title' => 'Shop',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'shop',
                    'seo_title' => 'faq Seo Title',
                    'seo_description' => 'faq Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 12,
                    'title' => 'Wishlist',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'wishlist',
                    'seo_title' => 'contact Seo Title',
                    'seo_description' => 'contact Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 13,
                    'title' => 'checkout',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'checkout',
                    'seo_title' => 'checkout Seo Title',
                    'seo_description' => 'checkout Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 15,
                    'title' => '404',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => '404',
                    'seo_title' => '404 Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 16,
                    'title' => 'Anasayfa',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'anasayfa',
                    'seo_title' => '404 Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 17,
                    'title' => 'About Us',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'about-us',
                    'seo_title' => 'About Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 18,
                    'title' => 'Delivery Information',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'delivery-information',
                    'seo_title' => '404 Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 19,
                    'title' => 'Privacy Policy',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'privacy-policy',
                    'seo_title' => '404 Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 20,
                    'title' => 'Terms & Conditions',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'terms-conditions',
                    'seo_title' => '404 Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
                [
                    'id' => 21,
                    'title' => 'Payment',
                    'user_id' => User::where('role','admin')->first()->id,
                    'content' => 'Page Info',
                    'status' => 1,
                    'type' => 'page',
                    'slug' => 'payment',
                    'seo_title' => '404 Seo Title',
                    'seo_description' => '404 Seo Description',
                    'created_at' => Carbon::now(),
                ],
            ];

        Post::insert($posts);
        Post::factory(10)->create();
        //factory(Post::class, 100)->create();
    }
}
