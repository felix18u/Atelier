<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestationTableSeeder extends Seeder
{
    /**
     *  
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestation')->insert([
            'nom' => 'Champagne', 
            'descr' => 'Bouteille de champagne + flutes + jeux à gratter', 
            'cat_id' => 1, 
            'img' => 'champagne.jpg', 
            'prix' => '20.00']);
        DB::table('prestation')->insert([
            'nom' => 'Musique', 
            'descr' => 'Partitions de piano à 4 mains', 
            'cat_id' => 1, 
            'img' => 'musique.jpg', 
            'prix' => '25.00']);
        DB::table('prestation')->insert([
            'nom' => 'Exposition', 
            'descr' => 'Visite guidée de l’exposition ‘REGARDER’ à la galerie Poirel', 
            'cat_id' => 2, 
            'img' => 'poirelregarder.jpg', 
            'prix' => '14.00']);
        DB::table('prestation')->insert([
            'nom' => 'Goûter', 
            'descr' => 'Goûter au FIFNL', 
            'cat_id' => 3, 
            'img' => 'gouter.jpg', 
            'prix' => '20.00']);
        DB::table('prestation')->insert([
            'nom' => 'Projection', 
            'descr' => 'Projection courts-métrages au FIFNL', 
            'cat_id' => 2, 
            'img' => 'film.jpg', 
            'prix' => '10.00']);
        DB::table('prestation')->insert([
            'nom' => 'Bouquet',
            'descr' => 'Bouquet de roses et Mots de Marion Renaud', 
            'cat_id' => 1, 
            'img' => 'rose.jpg', 
            'prix' => '16.00']);
        DB::table('prestation')->insert([
            'nom' => 'Diner Stanislas', 
            'descr' => 'Diner à La Table du Bon Roi Stanislas (Apéritif /Entrée / Plat / Vin / Dessert / Café / Digestif)', 
            'cat_id' => 3, 
            'img' => 'bonroi.jpg', 
            'prix' => '60.00']);
        DB::table('prestation')->insert([
            'nom' => 'Origami', 
            'descr' => 'Baguettes magiques en Origami en buvant un thé', 
            'cat_id' => 3, 
            'img' => 'origami.jpg', 
            'prix' => '12.00']);
        DB::table('prestation')->insert([
            'nom' => 'Livres', 
            'descr' => 'Livre bricolage avec petits-enfants + Roman', 
            'cat_id' => 1, 
            'img' => 'bricolage.jpg',
            'prix' => '24.00']);
        DB::table('prestation')->insert([
            'nom' => 'Diner  Grand Rue ', 
            'descr' => 'Diner au Grand’Ru(e) (Apéritif / Entrée / Plat / Vin / Dessert / Café)', 
            'cat_id' => 3, 
            'img' => 'grandrue.jpg', 
            'prix' => '59.00']);
        DB::table('prestation')->insert([
            'nom' => 'Visite guidée', 
            'descr' => 'Visite guidée personnalisée de Saint-Epvre jusqu’à Stanislas', 
            'cat_id' => 2, 
            'img' => 'place.jpg',
            'prix' => '11.00']);
        DB::table('prestation')->insert([
            'nom' => 'Bijoux', 
            'descr' => 'Bijoux de manteau + Sous-verre pochette de disque + Lait après-soleil', 
            'cat_id' => 1, 
            'img' => 'bijoux.jpg', 
            'prix' => '29.00']);
        DB::table('prestation')->insert([
            'nom' => 'Opéra', 
            'descr' => 'Concert commenté à l’Opéra', 
            'cat_id' => 2, 
            'img' => 'opera.jpg', 
            'prix' => '15.00']);
        DB::table('prestation')->insert([
            'nom' => 'Thé Hotel de la reine', 
            'descr' => 'Thé de debriefing au bar de l’Hotel de la reine', 
            'cat_id' => 3, 
            'img' => 'hotelreine.gif', 
            'prix' => '5.00']);
        DB::table('prestation')->insert([
            'nom' => 'Jeu connaissance', 
            'descr' => 'Jeu pour faire connaissance', 
            'cat_id' => 2, 
            'img' => 'connaissance.jpg', 
            'prix' => '6.00']);
        DB::table('prestation')->insert([
            'nom' => 'Diner', 
            'descr' => 'Diner (Apéritif / Plat / Vin / Dessert / Café)', 
            'cat_id' => 3, 
            'img' => 'diner.jpg', 
            'prix' => '40.00']);
        DB::table('prestation')->insert([
            'nom' => 'Cadeaux individuels', 
            'descr' => 'Cadeaux individuels sur le thème de la soirée', 
            'cat_id' => 1, 
            'img' => 'cadeaux.jpg', 
            'prix' => '13.00']);
        DB::table('prestation')->insert([
            'nom' => 'Animation', 
            'descr' => 'Activité animée par un intervenant extérieur', 
            'cat_id' => 2, 
            'img' => 'animateur.jpg', 
            'prix' => '9.00']);
        DB::table('prestation')->insert([
            'nom' => 'Jeu contacts', 
            'descr' => 'Jeu pour échange de contacts', 
            'cat_id' => 2, 
            'img' => 'contact.png', 
            'prix' => '5.00']);
        DB::table('prestation')->insert([
            'nom' => 'Cocktail', 
            'descr' => 'Cocktail de fin de soirée', 
            'cat_id' => 3, 
            'img' => 'cocktail.jpg', 
            'prix' => '12.00']);
        DB::table('prestation')->insert([
            'nom' => 'Star Wars', 
            'descr' => 'Star Wars - Le Réveil de la Force. Séance cinéma 3D', 
            'cat_id' => 2, 
            'img' => 'starwars.jpg', 
            'prix' => '12.00']);
        DB::table('prestation')->insert([
            'nom' => 'Concert', 
            'descr' => 'Un concert à Nancy', 
            'cat_id' => 2, 
            'img' => 'concert.jpg', 
            'prix' => '17.00']);
        DB::table('prestation')->insert([
            'nom' => 'Appart Hotel', 
            'descr' => 'Appart’hôtel Coeur de Ville, en plein centre-ville', 
            'cat_id' => 4, 
            'img' => 'apparthotel.jpg', 
            'prix' => '56.00']);
        DB::table('prestation')->insert([
            'nom' => 'Hôtel d\'Haussonville', 
            'descr' => 'Hôtel d\'Haussonville, au coeur de la Vieille ville à deux pas de la place Stanislas', 
            'cat_id' => 4, 
            'img' => 'hotel_haussonville_logo.jpg', 
            'prix' => '169.00']);
        DB::table('prestation')->insert([
            'nom' => 'Boite de nuit', 
            'descr' => 'Discothèque, Boîte tendance avec des soirées à thème & DJ invités', 
            'cat_id' => 2, 
            'img' => 'boitedenuit.jpg', 
            'prix' => '32.00']);
        DB::table('prestation')->insert([
            'nom' => 'Planètes Laser', 
            'descr' => 'Laser game : Gilet électronique et pistolet laser comme matériel, vous voilà équipé.', 
            'cat_id' => 2, 
            'img' => 'laser.jpg', 
            'prix' => '15.00']);
        DB::table('prestation')->insert([
            'nom' => 'Fort Aventure', 
            'descr' => 'Découvrez Fort Aventure à Bainville-sur-Madon, un site Accropierre unique en Lorraine ! Des Parcours Acrobatiques pour petits et grands, Jeu Mission Aventure, Crypte de Crapahute, Tyrolienne, Saut à l\'élastique inversé, Toboggan géant... et bien plus encore.', 
            'cat_id' => 2, 
            'img' => 'fort.jpg', 
            'prix' => '25.00']);
    }
}
