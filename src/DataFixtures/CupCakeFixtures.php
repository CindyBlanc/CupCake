<?php

namespace App\DataFixtures;

use App\Entity\CupCake;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CupCakeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // $c1 = new CupCake();
        // $c1 -> setNom("Cupcakes à l'amande
        // ")
        //     -> setImage("CupCake2.jpg")
        //     -> setIngredient("- 110g de Beurre
        //     - 110g de Sucre
        //     - 2 oeufs
        //     - 1 cuillère à café
        //     Extrait d'amande
        //     - 110 g
        //     Farine
        //     - 1 cuillère à café
        //     Levure chimique
        //     - Colorant alimentaire (facultatif c'est pour la décoration)
        //     - 100 g
        //     Beurre
        //     - 200 g
        //     Sucre glace
        //     - 2 gouttes
        //     Extrait d'amande")
        //     -> setRecette("ÉTAPE 1
        //     Préparer les petits gâteaux :
            
        //     ÉTAPE 2
        //     Préchauffer le four à 180°C, thermostat 6.
            
        //     ÉTAPE 3
        //     Faire fondre le beurre et le mettre dans un saladier.
            
        //     ÉTAPE 4
        //     Ajouter le sucre, les oeufs, l'amande, la farine et la levure. Mélanger jusqu'à ce que la pâte soit bien lisse, si nécessaire ajouter un peu de lait.
            
        //     ÉTAPE 5
        //     Répartir la pâte dans des caissettes en papier ou dans des petits moules. Et faire cuire pendant 15 min.
            
        //     ÉTAPE 6
        //     Pour réaliser le glaçage :
            
        //     ÉTAPE 7
        //     Faire fondre le beurre et le mettre dans un saladier.
            
        //     ÉTAPE 8
        //     Tamiser le sucre glace et mélanger-le avec le beurre.
            
        //     ÉTAPE 9
        //     Ajouter l'amande et quelques gouttes de colorant alimentaire. Mélanger.
            
        //     ÉTAPE 10
        //     Pour mettre le glaçage sur les cupcakes, mettre la pâte du glaçage dans un sac congélation, couper un angle (ne pas faire un gros trou !) et décorer vos cupcakes avec le glaçage.");
        // $manager->persist($c1);

        // $c2 = new CupCake();
        // $c2 -> setNom("Cupcakes Au Chocolat")
        //     -> setImage("CupCake1.jpg")
        //     -> setIngredient("- 125 g de farine
        //     - 145 g de sucre blanc
        //     - 40 g de cacao en poudre
        //     - 1 œuf
        //     - 12 cl de yaourt nature
        //     - 80 g de beurre
        //     - ½ cuillère à café de levure chimique
        //     - ¼ cuillère à café de bicarbonate de soude
        //     - Pour le glaçage au chocolat :
        //     - 200 g de beurre
        //     - 130 g de sucre glace
        //     - 15 g de cacao en poudre")
        //     -> setRecette("Etape 1 : Préchauffez le four à 180°C.
        //     Etape 1 : Mélangez dans un saladier la farine, le cacao, la levure chimique et le bicarbonate de soude.

        //     Etape 2 : Dans un bol, fouettez ensemble le beurre et le sucre.
            
        //     Etape 3 : Puis ajoutez l’œuf entier et mélangez.
            
        //     Etape 4 : Versez le mélange du bol dans le saladier.
            
        //     Etape 5 : Une fois le tout mélangé, déposez des caissettes à cupcakes dans les empreintes du moule à cupcakes.
            
        //     Etape 6 : Versez ensuite la pâte et faites en sorte que les cavités soient remplies à 2/3.
            
        //     Etape 7 : Enfournez pendant 20-25 min. Pour vérifier si le cupcake est bien cuit, plantez la pointe d’un couteau et regardez s’il reste de la pâte dessus. Le cupcake doit également être gonflé.
            
        //     Etape 8 : Pendant la cuisson, faites le glaçage qui servira de topping pour vos cupcakes au chocolat.
            
        //     Etape 9 : Battez le beurre, le sucre glace et le cacao à l’aide d’un fouet.
            
        //     Etape 10 : Une fois les cupcakes sortis du four et refroidis, versez le glaçage dans une poche à douille munie de la douille de votre choix. Nous vous conseillons 1M parfait pour le glaçage sur les cupcakes.
            
        //     Etape 11 : Placez le glaçage sur le dessus de vos cupcakes.
            
        //     Etape 12 : Ajoutez enfin vos petites décorations comestibles sur les cupcakes.
            
        //     Les cupcakes au chocolat sont prêts, régalez vous !");
        // $manager->persist($c2);


        $manager->flush();
    }
}
