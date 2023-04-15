<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Plywood Meranti',
                'photos' => json_encode(['1.png', '2.png']),
                'description' => 'Meranti plywood is a type of plywood that is made from the wood of the Meranti tree, which is native to Southeast Asia. The wood is known for its durability and strength, which makes it a popular choice for construction and woodworking projects. Meranti plywood is often used for exterior applications such as roofing, siding, and decking, as well as for interior applications like furniture and cabinetry. It is typically reddish-brown in color and has a fairly uniform grain pattern. The plywood is made by gluing together thin layers of Meranti wood veneer, which creates a strong and stable sheet material that can be cut and shaped as needed.',
                'price' => 150.00,
                'size' => 'Standart Size 1220 x 2440',
                'thickness' => '3 mm, 5 mm, 9 mm, 12 mm ,15 mm, 18 mm',
                'category' => 'Plywood',
                'tags' => json_encode(['Meranti', '6mm']),
                'specifications' => json_encode(['Short Core & long Core'  => 'Albasia Wood', 'Face & Back' => 'Albasia wood',
                'Glue' => 'MR or CARB Standart ( P2, E1, Ect)', 'Grade' => 'BBCC & UTY BETTER', 'Certificate' => 'CARB']),
            ],
            [
                'title' => 'Plywood Albizia',
                'photos' => json_encode(['3.png', '4.png']),
                'description' => 'Albizia plywood is a type of plywood that is made from the wood of the Albizia tree, which is native to tropical regions of the world. The wood is known for its light weight and easy workability, which makes it a popular choice for a variety of woodworking projects. Albizia plywood is often used for interior applications such as furniture, cabinetry, and decorative paneling, as well as for crafting and DIY projects. It is typically light in color and has a relatively uniform grain pattern. The plywood is made by gluing together thin layers of Albizia wood veneer, which creates a strong and stable sheet material that can be cut and shaped as needed.',
                'price' => 180.00,
                'size' => 'Standart Size 1220 x 2440',
                'thickness' => '3 mm, 5 mm, 9 mm, 12 mm ,15 mm, 18 mm',
                'category' => 'Plywood',
                'tags' => json_encode(['Albizia', 'Plywood']),
                'specifications' => json_encode(['Short Core & long Core'  => 'Albasia Wood', 'Face & Back' => 'Albasia wood',
                'Glue' => 'MR or CARB Standart ( P2, E1, Ect)', 'Grade' => 'BBCC & UTY BETTER', 'Certificate' => 'CARB']),
            ],
            [
                'title' => 'Plywood Teak',
                'photos' => json_encode(['5.png', '6.png']),
                'description' => 'Teak plywood is a type of plywood that is made from the wood of the teak tree, which is native to Southeast Asia and is highly valued for its durability and water resistance. The wood is known for its beautiful golden brown color and rich, distinctive grain pattern, which makes it a popular choice for high-end furniture, boat building, and outdoor decking. Teak plywood is often used for exterior applications such as marine applications, outdoor furniture, and decorative paneling, as well as for interior applications like flooring and cabinetry. It is typically more expensive than other types of plywood due to the high quality of the teak wood used. The plywood is made by gluing together thin layers of teak wood veneer, which creates a strong and stable sheet material that can be cut and shaped as needed.',
                'price' => 120.00,
                'size' => 'Standart Size 1220 x 2440',
                'thickness' => '3 mm, 5 mm, 9 mm, 12 mm ,15 mm, 18 mm',
                'category' => 'Plywood',
                'tags' => json_encode(['Teak', 'Plywood']),
                'specifications' => json_encode(['Short Core & long Core'  => 'Albasia Wood', 'Face & Back' => 'Albasia wood',
                'Glue' => 'MR or CARB Standart ( P2, E1, Ect)', 'Grade' => 'BBCC & UTY BETTER', 'Certificate' => 'CARB']),
            ],
            [
                'title' => 'Combi Plywood',
                'photos' => json_encode(['7.png', '8.png']),
                'description' => 'Combi plywood is a type of plywood that is made by combining two or more different wood species, such as Meranti, Mahogany, and Jabon. The combination of different wood species is intended to take advantage of the unique properties of each type of wood to create a plywood that has the desired characteristics for a particular application. Combi plywood can be used for a variety of projects, including interior and exterior applications like furniture, cabinetry, paneling, and roofing. It is known for its strength, stability, and durability, as well as for its aesthetic qualities. The plywood is made by gluing together thin layers of the different wood veneers, which creates a strong and stable sheet material that can be cut and shaped as needed.' ,
                'price' => 300.00,
                'size' => 'Standart Size 1220 x 2440',
                'thickness' => '3 mm, 5 mm, 9 mm, 12 mm ,15 mm, 18 mm',
                'category' => 'Plywood',
                'tags' => json_encode(['Meranti', 'Mahoney' , 'Jabon', 'Plywood']),
                'specifications' => json_encode(['Short Core & Long Core' => 'Albasia Wood mix Meranti, Mahoney, Jabon (Cadamba)',
                'Face & Back' => 'Meranti / Mahoney / Jabon',
                'Glue' => 'MR or CARB Standart ( P2, E1, Ect)',
                'Grade' => 'BBCC & UTY BETTER',
                 'Certificate' => 'CARB']),
            ],

        ]);
    }
}
