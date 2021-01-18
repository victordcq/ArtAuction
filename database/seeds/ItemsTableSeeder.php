<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * items  seeder
     *
     * @return void
     */
    public function run()
    {
		$randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        //1
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Zonnebloemen',
            'discription' => '<p>Zonnebloemen is een serie stillevens (olieverf op doek) gemaakt door de Nederlandse kunstschilder Vincent van Gogh. Van de serie zonnebloemen bestaan er drie schilderijen met vijftien zonnebloemen in een vaas en twee schilderijen met twaalf zonnebloemen in een vaas. Van Gogh schilderde eerst de Vaas met de twaalf zonnebloemen, die in het Neue Pinakothek-museum in München in Duitsland hangt. Dan de eerste van de Vaas met vijftien zonnebloemen, die in de National Gallery in Londen hangt, gemaakt in augustus 1888 toen hij in Arles in Zuid-Frankrijk woonde. De latere schilderijen zijn ontstaan in januari 1889.</p>',
            'year' => 1887,
            'origin' => 'Nederland',
            'name_artist' => 'Vincent van gogh',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //2
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Head with blue shadow',
            'discription' => '<p>Head with nlue shadow, 1965, painted ceramic, 38.1x21x20cm singed and dated inside front of neck</p>',
            'year' => 1887,
            'origin' => 'American',
            'name_artist' => 'Roy Lichtenstein',
            'type_id'=> 2,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //3
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Het zotte geweld',
            'discription' => '<p>Wouters maakte het beeld in zijn atelier te Bosvoorde (Brussel). Hij wilde breken met het kille academisme en kreeg inspiratie na het zien van de Amerikaanse ballerina Isadora Duncan, wier wilde Skythendans beroemd was. In het gezelschap van zijn vrouw Nel woonde hij in december 1907 een opvoering van lIsadorable bij in de Brusselse Muntschouwburg. Met een zieke Nel als model creëerde hij een extatische en schaterlachende danseres in beweging. Vijf jaar zou hij eraan werken. Hij plaatste het twee meter hoge beeld op een sokkel om de veerkracht extra te benadrukken. Oorspronkelijk heette dit meesterwerk van de beeldhouwkunst De dwaze maagd. Later raakte Het zotte geweld in zwang.</p>',
            'year' => 1912,
            'origin' => 'Belgie',
            'name_artist' => 'Rik wouters',
            'type_id'=> 2,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //4
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Yaure Baule mask',
            'discription' => '<p>Wooden Yaure Baule Mask with double comb on top, from ivory coast Africa. </p>',
            'year' => 1912,
            'origin' => 'Ivory coast Africa',
            'name_artist' => 'unknown',
            'type_id'=> 3,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //5
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Chinese painting of tree',
            'discription' => '<p>Hanging scroll painted by Ma Ling around 1246, ink and color on silk 226x110.3cm </p>',
            'year' => 1246,
            'origin' => 'China',
            'name_artist' => 'Ma ling',
            'type_id'=> 4,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //6
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Chinese statue of dragon',
            'discription' => '<p>Chinese statue of a dragon, on the wall at hainan</p>',
            'year' => 0,
            'origin' => 'China',
            'name_artist' => 'yazhuo',
            'type_id'=> 2,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //7
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Death and the grave digger',
            'discription' => '<p>La Mort et le Fossoyeur ("Death and the gravedigger", c. 1895) by Carlos Schwabe is a visual compendium of symbolist motifs. The angel of Death, pristine snow, and the dramatic poses of the characters all express symbolist longings for transfiguration “anywhere, out of the world.”</p>',
            'year' => 1895,
            'origin' => 'Switzerland',
            'name_artist' => 'Carlos Schwabe',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
         //8
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Pornocrates',
            'discription' => '<p>Pornocrates, by Félicien Rops, etching and aquatint, 1878</p>',
            'year' => 1879,
            'origin' => 'Beglium',
            'name_artist' => 'Félicien Rops',
            'type_id'=> 6,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //9
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Women with a parasol',
            'discription' => '<p>Women with a parasol painting from Claude Monet in impressionism</p>',
            'year' => 1875,
            'origin' => 'France',
            'name_artist' => 'Claude Monet',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //10
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'The childs bath',
            'discription' => '<p>Mother bathing child by Mary cassatt 100x66cm</p>',
            'year' => 1893,
            'origin' => 'American',
            'name_artist' => 'Mary cassatt',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //11
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Statue peplos kore',
            'discription' => '<p>Statue of girl made in ancient greek, lost an arm.</p>',
            'year' => 1893,
            'origin' => 'Greece',
            'name_artist' => 'unknown',
            'type_id'=> 2,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //12
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Mask of Agamemnon',
            'discription' => '<p>famous mask of amgamemnon, The Mask of Agamemnon is a gold funeral mask discovered at the ancient Greek site of Mycenae. probably the death mask of king agamemnon himself.</p>',
            'year' => -1150,
            'origin' => 'Greece',
            'name_artist' => 'unknown',
            'type_id'=> 3,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //13
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'The siren vase',
            'discription' => '<p>famous vase of the siren from greek. adisee haging on the mask while siren sing.</p>',
            'year' => -480,
            'origin' => 'Greece',
            'name_artist' => 'unknown',
            'type_id'=> 7,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //14
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Marliyn Diptych',
            'discription' => '<p>Silk-screening process was used while creating this painting. Warhol used a woven mesh and stencils to transmit paint onto the canvas. The repetitive images seem alike at first sight, but on further consideration the shades are changing because of the oil and paints, which gives it a new perception. 25 images on the left are painted in color, whereas the right side is all in black and white. On some of the images on the right side the actress’s face is hardly seen because of the distortion. The whole painting consists of 50 images</p>',
            'year' => 1962,
            'origin' => 'American',
            'name_artist' => 'Andy Warhol',
            'type_id'=> 6,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //15
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Mask Mambila',
            'discription' => '<p>Mask Mambila cameroun, 37 hight</p>',
            'year' => 0,
            'origin' => 'African',
            'name_artist' => 'unknown',
            'type_id'=> 3,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //16
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Benin bronze leopard pair',
            'discription' => '<p>ancient statue made of a tiger in bronze from nigeria, comes in pair</p>',
            'year' => 0,
            'origin' => 'African, Nigeria',
            'name_artist' => 'unknown',
            'type_id'=> 2,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //17
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Composition VII',
            'discription' => '<p>According to Kandinsky, this is the most complex piece he ever painted 200x300cm, abstract painting.</p>',
            'year' => 1913,
            'origin' => 'Russia',
            'name_artist' => 'Kandinsky',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //18
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Squares with concentric circles',
            'discription' => '<p>Watercolor, gouache and crayon on paper (23.8 × 31.4 cm) Munich, The Städtische Galerie im Lenbachhaus Squares with Concentric Circles (Farbstudie - Quadrate und konzentrische Ringe), perhaps, Kandinskys most recognizable work, is not actually a full-fledged picture. This drawing is a small study on how different colour combinations are perceived that the painter used in his creative process as a support material.For Kandinsky, colour meant more than just a visual component of a picture. Colour is its soul. In his books, he described his own perspective on how colours interacted with each other and with the spectator in detail and very poetically. Moreover, Kandinsky was a synaesthete, i.e. he could ‘hear colours’ and ‘see sounds.</p>',
            'year' => 1913,
            'origin' => 'Russia',
            'name_artist' => 'Kandinsky',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //19
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'Campbell soup Cans',
            'discription' => '<p>Campbells Soup Cans,[1] which is sometimes referred to as 32 Campbells Soup Cans,[2] is a work of art produced in 1962 by Andy Warhol. It consists of thirty-two canvases, each measuring 20 inches (51 cm) in height × 16 inches (41 cm) in width and each consisting of a painting of a Campbells Soup can—one of each of the canned soup varieties the company offered at the time.[1] The individual paintings were produced by a printmaking method—the semi-mechanized screen printing process, using a non-painterly style. Campbells Soup Cans reliance on themes from popular culture helped to usher in pop art as a major art movement in the United States.</p>',
            'year' => 1962,
            'origin' => 'America',
            'name_artist' => 'Andy warhol',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        //20
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        Item::create([
            'users_id' => rand(1,4),
            'name' => 'The Basket of Apples',
            'discription' => '<p>The Basket of Apples is a still life oil painting by French artist Paul Cézanne. It belongs to the Helen Birch Bartlett Memorial Collection of the Art Institute of Chicago.The piece is often noted for its disjointed perspective. It has been described as a balanced composition due to its unbalanced parts;[1] the tilted bottle, the incline of the basket, and the foreshortened lines of the cookies mesh with the lines of the tablecloth.[1] Additionally, the right side of the tabletop is not in the same plane as the left side, as if the image simultaneously reflects two viewpoints.[2] Paintings such as this helped form a bridge between Impressionism and Cubism. 65 cm × 80 cm</p>',
            'year' => 1895,
            'origin' => 'France',
            'name_artist' => 'Paul Cézanne',
            'type_id'=> 5,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);

    }
}
