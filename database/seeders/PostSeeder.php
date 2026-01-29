<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'slug' => 'authentic-mutual-love',
            'title' => 'Authentic Mutual Love',
            'author_id' => 1,
            'category_id' => 1,
            'body' => 'Authentic Mutual Love (真しん贋がん相そう愛あい Shingan Sōai?): The domain is a field of cross-like structures littered with countless katanas and encircled by ropes tied together in a fashion symbolic of love. Yuta can wield any of the katanas and activate copied cursed techniques without any restrictions. A copied cursed technique also serves as the sure-hit effect of the domain.'
        ]);
        Post::create([
            'slug' => 'heavenly-restriction',
            'title' => 'Heavenly restriction',
            'author_id' => 2,
            'category_id' => 5,
            'body' => 'Physically Gifted (フィジカルギフテッド Fijikaru Gifuteddo?):[81][82] In exchange for her lack of cursed energy, Maki has always possessed exceptional physical prowess. While not as superhuman as Yuji Itadori, she possessed peak human capabilities comparable to sorcerers who constantly train in cursed energy reinforcement. Maki strength allowed her to work effectively as a sorcerer by wielding cursed tools despite not having enough cursed energy to be technically considered one.'
        ]);
        Post::create([
            'slug' => 'hollow-purple',
            'title' => 'Hollow Technique: Purple',
            'author_id' => 3,
            'category_id' => 3,
            'body' => '(虚きょ式しき「茈むらさき」 Kyoshiki・Murasaki?): An advanced technique that collides the Lapse and Reversal of the Limitless, resulting in the creation of imaginary mass that is then launched at the target to deal destructive damage.'
        ]);
        Post::create([
            'slug' => 'sukuna-rct',
            'title' => 'Reversed Cursed Technique Sukuna',
            'author_id' => 4,
            'category_id' => 4,
            'body' => '(反はん転てん術じゅつ式しき Hanten Jutsushiki?): Sukuna is highly proficient with reverse cursed technique. While incarnated in Yuji body, he used his reverse cursed technique to instantly heal any injuries, including even regenerating lost limbs within moments. Regained limbs'
        ]);
        Post::create([
            'slug' => 'adaptation',
            'title' => 'Adaptation',
            'author_id' => 5,
            'category_id' => 2,
            'body' => 'The Divine General most notable power is the adaptation (適てき応おう tekiō?) to any and all phenomena, made visible through the turning of its wheel. If the General is hit by a particular attack, the wheel turns once the attack is analyzed, and Mahoraga adapts; if its adversary uses that same technique again, Mahoraga will counter it from then on.'
        ]);
    }
}