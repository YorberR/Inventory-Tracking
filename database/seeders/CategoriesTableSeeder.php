<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['id' => 1, 'name' => 'Raw Materials', 'description' => 'Basic materials used in the production of goods and finished products. Example: wood, iron, fabric, etc.'],
            ['id' => 2, 'name' => 'Work-in-Progress (WIP)', 'description' => ' Items that are in the middle of the production cycle and are not yet ready to be sold. Example: a partially assembled car.'],
            ['id' => 3, 'name' => 'Finished Goods', 'description' => ' Fully manufactured items that are ready to be sold to the end customers. Example: furniture, clothing, appliances.'],
            ['id' => 4, 'name' => 'Accessories and Spare Parts', 'description' => 'Additional components or spare parts needed for the maintenance and repair of products. Example: screws, tools, engine parts.'],
            ['id' => 5, 'name' => 'Merchandise for Resale', 'description' => 'Goods purchased for resale without any transformation. Example: products in a retail store.'],
            ['id' => 6, 'name' => 'Office Supplies', 'description' => 'Supplies used in the daily operations of an office. Example: paper, pens, clips, ink cartridges.'],
            ['id' => 7, 'name' => 'Equipment and Machinery', 'description' => 'Tools and machines used in production processes and operations. Example: computers, printers, industrial machines.'],
            ['id' => 8, 'name' => 'Perishable Goods', 'description' => 'Items that have a limited shelf life and must be consumed before a specific date. Example: food, pharmaceuticals.'],
            ['id' => 9, 'name' => 'Cleaning Supplies', 'description' => 'Supplies used to maintain cleanliness and order in facilities. Example: detergents, brooms, cloths.'],
            ['id' => 10, 'name' => 'Medical Supplies', 'description' => 'Equipment and products used in healthcare. Example: gloves, masks, disinfectants'],
        ]);
    }
}
