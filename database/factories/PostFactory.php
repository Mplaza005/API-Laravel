<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\post;
use App\Models\User;
use App\Models\Category;


class PostFactory extends Factory
{
    protected $model = Post::class;
    
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'extract'=>$this->faker->text(250),
            'body'=> $this->faker->text(2000),
        // 'status'=>$this->faker->num(1),
            'category_id'=>Category::all()->random()->id,
            'user_id'=>User::all()->random()->id
        ];
    }
}
