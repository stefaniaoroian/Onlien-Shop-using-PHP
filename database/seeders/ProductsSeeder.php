<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Alstroemeria',
                'description' => 'Alstroemeria este cunoscuta si sub denumirea de „crin peruvian”, datorita asemanarii sale cu crinii in miniatura',
                'image' => 'images/alstroemeria.jpg',
                'price' => 5.5
            ],

            [
                'name' => 'Buchet din flori de câmp',
                'description' => 'Buchetul este alcătuit din margarete, violete si multe alte flori colorate spre a înveseli pe oricine le privește.',
                'image' => 'images/flori_camp.jpg',
                'price' => 40
            ],
            [
                'name' => 'Anemona',
                'description' => 'Daca ii oferi cuiva un buchet de anemone ii va aduce noroc si protectie impotriva raului',
                'image' => 'images/anemona.jpg',
                'price' => 10
            ],
            [
                'name' => 'Arnajament trandafiri',
                'description' => 'Un aranjament floral, realizat in cutie tip inima. Aranjamentul este realizat din 3 trandafiri roz, 3 minirose roz, 3 alstroemeria alba, wax alba, ginestra, pampas, eucalypt.',
                'image' => 'images/aranjtrandafiri.jpg',
                'price' => 50
            ],
            [
                'name' => 'Frezie',
                'description' => 'Frezia are forma de clopot si un parfum dulce de citrice. Frezia simbolizeaza inocenta, prietenie si gratie.',
                'image' => 'images/frezie.jpg',
                'price' => 6
            ],
            [
                'name' => 'Buchet Primavera',
                'description' => 'Acest buchet de flori este surpriza perfecta pentru o zi de naștere, o aniversare, o ocazie specială sau doar pentru a-ti crea o stare mai buna.',
                'image' => 'images/primavera.jpg',
                'price' => 60
            ],
            [
                'name' => 'Poinsettia (Craciunita)',
                'description' => 'Poinsettia este o planta superba cu flori in forma de stea. Florile sale sunt de fapt frunze, care isi schimba culoarea. Culorile variaza de la rosu, verde, roz, crem si portocaliu.',
                'image' => 'images/craciunita.jpg',
                'price' => 30
            ],
            [
                'name' => 'Arnajament tomnatic',
                'description' => 'Acest aranjament este perfect pentru persoanele care iubesc culorile calde de toamna. Acesta ofera un aer cald atat omului cat si locului.',
                'image' => 'images/toamna.jpg',
                'price' => 70
            ],
            [
                'name' => 'Buchet Lavanda',
                'description' => 'Lavanda se gaseste in diferite culori: albastru, violet si mov. Este o floare apreciata, in principal, pentru miros. Lavanda simbolizeaza devotament. Se ofera, de obicei, oamenilor pentru noroc, belsug si intelepciune.',
                'image' => 'images/buchetlavanda.jpg',
                'price' => 25
            ],
            [

                'name' => 'Buchet Hortensia',
                'description' => 'Un buchet din 7 hortensii albe nu mai are nevoie de decoratiuni adaugatoare. Este un buchet de hotrensii sublim, ce emana gratie si gingasie.',
                'image' => 'images/buchethortensii.jpg',
                'price' => 100
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }

    }

}
