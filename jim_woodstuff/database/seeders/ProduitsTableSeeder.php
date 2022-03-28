<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            [
                'id' => 1,
                'nom' => 'Cuillère en buis 17cm',
                'description' => "Cuillère en buis de 17cm. Taillée au couteau.
Huilé d'un mélange de cire d'abeille et d'huile de coco. 100% artisanal. Le buis est un bois très dense, ce qui permet à la cuillère d'être très douce.
Durabilité garantie. boxwood spoon handcrafted",
                'prix' => 33.00,
                'image'=>'cuillerebuis17.jpg',
                'dispo'=>1,
                'categorie_id'=>1
            ],
            [
                'id' => 2,
                'nom' => "Boucles d'oreilles en buis de 3,5cm de long",
                'description' => "Boucles d'oreilles en buis de 3,5cm de long (sans compter le montant).
Montant en argent 925. Vendue avec une paire de stop pour ne pas les perdre.",
                'prix' => 24.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>2
            ],
           [
                'id' => 3,
                'nom' => "Cuillère en buis taillée à la main",
                'description' => "Cuillère en buis de 22cm, taillée au couteau.
                Huilée d'un mélange de cire d'abeille et d'huile de coco. Pièce unique.
Le buis est un bois dense qui donne une fois poncé un aspect très lisse et doux.
C'est un des meilleurs bois et des plus agréable à mettre en bouche. Durabilité garantie",
                'prix' => 35.00,
               'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>1
            ],
            [
                'id' => 4,
                'nom' => "Cuillère en noyer de 19cm",
                'description' => "Cuillère en noyer de 19cm, taillée à la main.
Huilée d'un mélange de cire d'abeille et d'huile de coco.
Du format d'une grosse cuillère à café,
La tête fait 3cm de large par 5 de long.
100% artisanal
Bois local
Pièce unique
A vos desserts!!!",
                'prix' => 22.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>1
            ],
            [
                'id' => 5,
                'nom' => "Cuillère en noyer de 20cm",
                'description' => "Cuillère en noyer de 20cm, taillée au couteau.
                 Huilée d'un mélange de cire d'abeille et d'huile de coco.
La tête de la cuillère fait 4cm de large par 5,5cm de long
Format cuillère à soupe.
100% artisanal
Pièce unique",
                'prix' => 22.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>1
            ],
            [
                'id' => 6,
                'nom' => "Cuillère pour bébé en hêtre fait à la main",
                'description' => "Cuillère de petite taille spécialement adapter pour les tout petits.
En hêtre, de 12cm de long, huilé avec un mélange de cire d'abeille et d'huile de coco.
Pièce unique.
Cadeau sympa à offrir à de futurs parents.",
                'prix' => 10.00,
                'image'=>'cuillerebebehetre.jpg',
                'dispo'=>2,
                'categorie_id'=>1
            ],
            [
                'id' => 7,
                'nom' => "Spatule en hêtre taillée à la main",
                'description' => "Spatule en hêtre de 28 cm de long. Prête pour cuisiner!
Taillée à la main.
Huilée d'un mélange de cire d'abeille et d'huile de coco.
Pièce unique
A vos casseroles!!!",
                'prix' => 24.00,
                'image'=>'spatulehetre.jpg',
                'dispo'=>1,
                'categorie_id'=>1
            ],
            [
                'id' => 8,
                'nom' => "Cuillère en buis",
                'description' => "Cuillère en buis de 22cm, taillée à la main.
Taillée au couteau.
Huilée d'un mélange de cire d'abeilles et d'huile de coco.
Pièce unique.
100% artisanale
Le buis est un bois très dense qui permet à la cuillère d'être très douce.
Durabilité garantie.
Boxwood spoon, handcrafted",
                'prix' => 33.00,
                'image'=>'cuillerebuis.jpg',
                'dispo'=>1,
                'categorie_id'=>1
            ],
            [
                'id' => 9,
                'nom' => "Boucles d'oreilles en prunier",
                'description' => "Boucles d'oreilles en prunier.
Montant en argent 925.
Longueur totale 6cm.",
                'prix' => 22.00,
                'image'=>'boucleprunierclair.jpg',
                'dispo'=>1,
                'categorie_id'=>2
            ],
            [
                'id' => 10,
                'nom' => "Boucles d'oreilles en prunelier",
                'description' => "Boucles d'oreilles en prunelier.
Montant argent 925.
Longueur totale 4,5cm.",
                'prix' => 20.00,
                'image'=>'boucleprunelier.jpg',
                'dispo'=>1,
                'categorie_id'=>2
            ],
            [
                'id' => 11,
                'nom' => "Cuillère en buis 18cm",
                'description' => "Cuillère en buis de 18 cm. Taillée au couteau.
La tête est très fine, comme une cuillère à cocktail, légère fente sur la longueur du manche qui ne gâche en rien l'esthétique de la cuillère.
Boxwood spoon handcrafted",
                'prix' => 30.00,
                'image'=>'cuillerebuis18.jpg',
                'dispo'=>1,
                'categorie_id'=>1
            ],
            [
                'id' => 12,
                'nom' => "Boucles d'oreilles en buis",
                'description' => "Boucles d'oreilles en buis.
Montant argent 925.
Longueur totale 6,5cm",
                'prix' => 24.00,
                'image'=>'bouclebuis.jpg',
                'dispo'=>1,
                'categorie_id'=>2
            ],
            [
                'id' => 13,
                'nom' => "Boucles d'oreilles en noyer",
                'description' => "Boucles d'oreilles en noyer.
Montant argent 925.
Longueur totale 4,5cm.",
                'prix' => 16.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>2
            ],
            [
                'id' => 14,
                'nom' => "Boucles d'oreilles en lila",
                'description' => "Boucles d'oreilles en lila.
Montant argent 925.
Longueur totale 4,5cm.",
                'prix' => 20.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>2
            ],
            [
                'id' => 15,
                'nom' => "Boucles d'oreilles en prunier",
                'description' => "Boucles d'oreilles en prunier.
Montant en argent 925.
Longueur totale 7cm.",
                'prix' => 20.00,
                'image'=>'boucleprunierfonce.jpg',
                'dispo'=>1,
                'categorie_id'=>2
            ],
            [
                'id' => 16,
                'nom' => "Boucles d'oreilles en buis",
                'description' => "Boucles d'oreilles en buis.
Montant argent 925.
Longueur totale 5cm.",
                'prix' => 22.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>2
            ],
            [
                'id' => 17,
                'nom' => "Cuillère en hêtre 17cm",
                'description' => "Cuillère en hêtre du 17cm. Taillée au couteau.
Belles couleurs, bien veinée.
Le hêtre est un grand classique dans les ustensiles de cuisine.",
                'prix' => 18.00,
                'image'=>'cuillerehetre17.jpg',
                'dispo'=>1,
                'categorie_id'=>1
            ],
            [
                'id' => 18,
                'nom' => "Cuillère en cerisier",
                'description' => "Cuillère en cerisier de 30cm, long manche parfait pour la cuisine.",
                'prix' => 22.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>1
            ],
            [
                'id' => 19,
                'nom' => "Cuillère en hêtre",
                'description' => "Cuillère en hêtre de 17cm, plus design que fonctionnelle.",
                'prix' => 15.00,
                'image'=>NULL,
                'dispo'=>2,
                'categorie_id'=>1
            ],
            [
                'id' => 20,
                'nom' => "Pendentif en buis unique",
                'description' => "pendentif en buis fait à la main.
le pendentif fait 3,5cm de large et 5mm d’épaisseur.
la bélière est en inox.
pendentif léger, très doux, les couleurs sont naturelles.
pièce unique.
vendu sans cordon.",
                'prix' => 22.00,
                'image'=>'collierbuis.jpg',
                'dispo'=>2,
                'categorie_id'=>2
            ],
        ]);
    }
}
