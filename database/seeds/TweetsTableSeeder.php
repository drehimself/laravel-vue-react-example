<?php

use App\Tweet;
use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tweet::create([
            'realname' => 'Andre Madarang',
            'username' => '@drehimself',
            'quote' => 'This is a tweet for you. I plan to release some new screencasts soon!',
            'avatar' => 'img/avatar1.png',
            'likes' => 4,
            'retweets' => 8,
            'comments' => 5,
        ]);

        Tweet::create([
            'realname' => 'Laravel',
            'username' => '@laravelphp',
            'quote' => 'Nova is a beautifully designed administration panel for Laravel. Coming soon!',
            'avatar' => 'img/avatar2.png',
            'likes' => 3,
            'retweets' => 6,
            'comments' => 24,
        ]);

        Tweet::create([
            'realname' => 'React',
            'username' => '@reactjs',
            'quote' => 'We are working on a large - scale rearchitecture of React Native to make the framework more flexible and integrate better with native infrastructure.',
            'avatar' => 'img/avatar3.png',
            'likes' => 15,
            'retweets' => 32,
            'comments' => 22,
        ]);

        Tweet::create([
            'realname' => 'Vue.js',
            'username' => '@vuejs',
            'quote' => 'Who is excited for the very first @vuejs Conference in #Canada? 🇨🇦',
            'avatar' => 'img/avatar4.png',
            'likes' => 26,
            'retweets' => 22,
            'comments' => 36,
        ]);
    }
}
