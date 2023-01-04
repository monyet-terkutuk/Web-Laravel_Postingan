<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   private static $BlogContent = [
    [
        "title"  => "Post Pertama",
        "slug"   => "post-pertama",
        "author" => "Gabriel Yonathan",
        "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut delectus inventore, ab officiis labore repellendus eum a, error est, culpa excepturi sit iusto eos. Praesentium hic obcaecati saepe molestiae laboriosam."
    ],
    [
        "title"  => "Post Kedua",
        "slug"   => "post-kedua",
        "author" => "Ilham Sahidan",
        "body"   => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea nostrum soluta numquam alias, exercitationem odio? Blanditiis, inventore cum. Corrupti molestias asperiores ut. Totam at vitae doloremque eaque repudiandae est nisi perspiciatis. Ex, atque. Dolores itaque dolorem natus fuga minus maiores consequatur id quis? Nemo libero voluptatem fugiat aliquid quia eligendi modi suscipit hic aliquam laboriosam nobis earum veritatis, non id provident amet. Blanditiis, velit. Dolores quae ducimus hic laboriosam cumque nisi nulla assumenda nobis. Optio accusantium odio rerum ipsam! Harum." 
    ]
];


public static function ball(){
    return collect(self::$BlogContent);
}
public static function find($slug){

    $content = static::ball();

    
    // $post = [];
    // foreach($content as $p){
    //     if($p["slug"] === $slug){
    //         $post = $p;
    //     }
    // }

    return $content -> firstWhere('slug', $slug);
}


}
