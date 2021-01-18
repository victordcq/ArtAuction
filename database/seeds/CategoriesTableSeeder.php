<?php

use Illuminate\Database\Seeder;
use App\Item;

class CategoriesTableSeeder extends Seeder
{
    /**
     * category seeder
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('categories')->insert([
            'name' => 'All',
            'discription' => '<p></p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //2
		DB::table('categories')->insert([
            'name' => 'Impressionism',
            'discription' => '<p>Impressionism is a 19th-century art movement characterised by relatively small, thin, yet visible brush strokes, open composition, emphasis on accurate depiction of light in its changing qualities (often accentuating the effects of the passage of time), ordinary subject matter, inclusion of movement as a crucial element of human perception and experience, and unusual visual angles. Impressionism originated with a group of Paris-based artists whose independent exhibitions brought them to prominence during the 1870s and 1880s</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //3
        DB::table('categories')->insert([
            'name' => 'Symbolism',
            'discription' => '<p>Symbolism was a late nineteenth-century art movement of French, Russian and Belgian origin in poetry and other arts.In literature, the style originates with the 1857 publication of Charles Baudelaires Les Fleurs du mal. The works of Edgar Allan Poe, which Baudelaire admired greatly and translated into French, were a significant influence and the source of many stock tropes and images. The aesthetic was developed by Stéphane Mallarmé and Paul Verlaine during the 1860s and 1870s. In the 1880s, the aesthetic was articulated by a series of manifestos and attracted a generation of writers. The name "symbolist" itself was first applied by the critic Jean Moréas, who invented the term to distinguish the Symbolists from the related Decadents of literature and of art.</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //4
        DB::table('categories')->insert([
            'name' => 'Popart',
            'discription' => '<p>Pop art is an art movement that emerged in Britain and the United States during the mid- to late-1950s.[1][2] The movement presented a challenge to traditions of fine art by including imagery from popular and mass culture, such as advertising, comic books and mundane cultural objects. One of its aims is to use images of popular (as opposed to elitist) culture in art, emphasizing the banal or kitschy elements of any culture, most often through the use of irony.[3] It is also associated with the artists use of mechanical means of reproduction or rendering techniques. In pop art, material is sometimes visually removed from its known context, isolated, or combined with unrelated material.</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //5
        DB::table('categories')->insert([
            'name' => 'African art',
            'discription' => '<p>African art describes the modern and historical paintings, sculptures, installations, and other visual culture from native or indigenous Africans and the African continent. The definition may also include the art of the native African, African diasporas, such as African American, Caribbean and other American art. Despite this diversity, there are some unifying artistic themes when considering the totality of the visual culture from the continent of Africa.[1]</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //6
        DB::table('categories')->insert([
            'name' => 'Greek art',
            'discription' => '<p>Greek art began in the Cycladic and Minoan civilization, and gave birth to Western classical art in the subsequent Geometric, Archaic and Classical periods (with further developments during the Hellenistic Period). It absorbed influences of Eastern civilizations, of Roman art and its patrons, and the new religion of Orthodox Christianity in the Byzantine era and absorbed Italian and European ideas during the period of Romanticism (with the invigoration of the Greek Revolution), until the Modernist and Postmodernist. Greek art is mainly five forms: architecture, sculpture, painting, pottery and jewelry making.</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //7
        DB::table('categories')->insert([
            'name' => 'Chinese Art',
            'discription' => '<p>Chinese art is visual art that, whether ancient or modern, originated in or is practiced in China or by Chinese artists. The Chinese art in the Republic of China (Taiwan) and that of overseas Chinese can also be considered part of Chinese art where it is based in or draws on Chinese heritage and Chinese culture. Early "stone age art" dates back to 10,000 BC, mostly consisting of simple pottery and sculptures. After this early period Chinese art, like Chinese history, is typically classified by the succession of ruling dynasties of Chinese emperors, most of which lasted several hundred years.</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //8
        DB::table('categories')->insert([
            'name' => 'Other',
            'discription' => '<p>This category can be anything, its is just an option to select if you want to upload somehting that is not in the list, contact the creater Victor Declercq (see page about) to ask them to add an extra option in the list</p>',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
    }
}
