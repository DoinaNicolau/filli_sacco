<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $categories = [
     // Attrezzature da cucina professionale
            ['name' => 'Forni professionali', 'description' => 'Forni statici, ventilati e combinati per ristorazione'],
            ['name' => 'Frigoriferi e congelatori professionali', 'description' => 'Sistemi di refrigerazione per uso commerciale'],
            ['name' => 'Piani cottura e fornelli industriali', 'description' => 'Soluzioni di cottura ad alte prestazioni'],
            ['name' => 'Cappe di aspirazione', 'description' => 'Cappe e sistemi di ventilazione professionali'],
            ['name' => 'Macchine per il sottovuoto', 'description' => 'Conservazione alimenti sottovuoto'],

            // Attrezzature per preparazione alimenti
            ['name' => 'Affettatrici', 'description' => 'Affettatrici professionali per salumi e formaggi'],
            ['name' => 'Impastatrici', 'description' => 'Impastatrici per panificazione e pasticceria'],
            ['name' => 'Tritacarne', 'description' => 'Macchine professionali per tritare carne'],
            ['name' => 'Mixer e frullatori industriali', 'description' => 'Preparazione di salse, creme e impasti'],
            ['name' => 'Lavapiatti e lavabicchieri', 'description' => 'Sistemi di lavaggio professionale'],

            // Arredo e banconi
            ['name' => 'Tavoli in acciaio inox', 'description' => 'Piani di lavoro professionali'],
            ['name' => 'Scaffalature', 'description' => 'Scaffali per stoccaggio e organizzazione'],
            ['name' => 'Banconi bar', 'description' => 'Banconi per bar e ristoranti'],
            ['name' => 'Vetrine refrigerate', 'description' => 'Espositori refrigerati per alimenti'],
            ['name' => 'Sedie e sgabelli', 'description' => 'Arredo per locali commerciali'],

            // Refrigerazione e conservazione
            ['name' => 'Celle frigorifere', 'description' => 'Grandi sistemi di refrigerazione'],
            ['name' => 'Armadi frigo', 'description' => 'Frigoriferi verticali professionali'],
            ['name' => 'Abbattitori di temperatura', 'description' => 'Per il raffreddamento rapido degli alimenti'],
            ['name' => 'Espositori refrigerati', 'description' => 'Vetrine per esposizione di alimenti freddi'],

            // Piccola attrezzatura
            ['name' => 'Coltelleria professionale', 'description' => 'Coltelli e utensili per chef'],
            ['name' => 'Utensili da cucina', 'description' => 'Attrezzatura varia per cucine professionali'],
            ['name' => 'Contenitori gastronorm', 'description' => 'Vaschette e contenitori standard gastronorm'],
            ['name' => 'Strumenti di misura e pesatura', 'description' => 'Bilance e strumenti di precisione'],

            // Servizi
            ['name' => 'Assistenza tecnica', 'description' => 'Riparazioni e interventi tecnici'],
            ['name' => 'Installazione e montaggio', 'description' => 'Servizi di montaggio attrezzature'],
            ['name' => 'Manutenzione programmata', 'description' => 'Contratti di manutenzione preventiva'],
            ['name' => 'Ricambi e accessori', 'description' => 'Pezzi di ricambio e componenti aggiuntivi'],
        ];
    

    public function run(): void
    {
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
