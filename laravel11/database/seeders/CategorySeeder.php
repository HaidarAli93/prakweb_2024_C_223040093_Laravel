<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		Category::create(array(
			'name' => 'Web Design',
			'slug' => 'web-design'
		));

		Category::create(array(
			'name' => 'UI UX',
			'slug' => 'ui-ux'
		));

		Category::create(array(
			'name' => 'Machine Learning',
			'slug' => 'machine-learning'
		));

		Category::create(array(
			'name' => 'Data Structure',
			'slug' => 'data-structure'
		));
    }
}
