<?php

use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '1',
            'title' => 'Piloto',
            'rating' => '7.4',
            'description' => 'En el primer episodio de la serie, el analista de la CIA Jack Ryan descubre una serie de transferencias de dinero sospechosas que lo llevan, junto a su jefe James Greer, a salir de su despacho para investigar sobre el terreno una grave amenaza a nivel mundial. Hanin comienza a sospechar de los asuntos que su marido se trae entre manos cuando recibe en casa a un misterioso extranjero.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '2',
            'title' => 'Conexión francesa',
            'rating' => '8.1',
            'description' => 'Jack y Greer descifran una nueva información que los lleva a París y los acerca al escurridizo Suleiman. El esposo de Hanin vuelve a casa con un fervor renovado por su misión secreta, y ella empieza a temer por el futuro de su familia.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '3',
            'title' => '22 Negro',
            'rating' => '8.1',
            'description' => 'El piloto de drones Victor se debate interiormente por la inmensa responsabilidad que conlleva su trabajo. Jack y Greer se unen a un equipo de la inteligencia francesa para localizar al hermano de Suleiman. Hanin se ve obligada a tomar una decisión muy arriesgada por el bien de sus hijos.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '4',
            'title' => 'El Lobo',
            'rating' => '8.2',
            'description' => 'A medida que Jack y Cathy van intimando, la doble vida de Jack se ve puesta a prueba. El poder de Suleiman entre sus seguidores aumenta y eso lo acerca más a su próximo ataque.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '5',
            'title' => 'El fin del honor',
            'rating' => '8.5',
            'description' => 'Tras un terrible atentado en una iglesia de París, Jack y Greer descubren que la estrategia de Suleiman va más allá de lo que aparenta, y Jack sugiere tenderle una arriesgada trampa. Mientras tanto, Hanin se enfrenta a nuevos desafíos en su búsqueda de la libertad.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '6',
            'title' => 'Fuentes y métodos',
            'rating' => '8.2',
            'description' => 'El código moral de Jack se ve sometido a una dura prueba cuando él y Greer se alían con un criminal turco para que este les ayude a localizar a un valioso objetivo que podría llevarlos hasta Suleiman. Al mismo tiempo, Hanin trata de esquivar a sus perseguidores y mantener a salvo a sus hijas, mientras Cathy investiga un virulento brote de ébola que parece esconder algo más siniestro.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '7',
            'title' => 'El muchacho',
            'rating' => '8.5',
            'description' => 'Jack y Greer intentan convencer a sus superiores de que ordenen un ataque terrestre secreto para capturar a Suleiman. La doble vida de Jack pone en grave riesgo una relación importante para él.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 1',
            'episode_number' => '8',
            'title' => 'Si Dios quiere',
            'rating' => '8.1',
            'description' => 'Jack y Greer sospechan que el próximo atentado de Suleiman se producirá en territorio estadounidense. Tendrán que descubrir cómo evitarlo o las pérdidas serán enormes.',
            'release_date' => '30 agosto 2018',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '1',
            'title' => 'Cargamento',
            'rating' => '8.0',
            'description' => 'Jack Ryan investiga qué hay realmente tras las transacciones entre Venezuela y varias potencias mundiales. James Greer, apartado de su nuevo puesto en Rusia, se une a Jack en Venezuela, y los dos se verán sumidos en pleno proceso de reelección del líder venezolano.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '2',
            'title' => 'Tertia optio',
            'rating' => '7.0',
            'description' => 'El senador Chapin autoriza a Jack a quedarse en Venezuela. El presidente Reyes niega cualquier implicación en los hechos que mantienen a Jack en el país. Mientras, Jack y Harry aúnan esfuerzos para seguir una pista que podría generar división en las filas.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '3',
            'title' => 'Orinoco',
            'rating' => '6.5',
            'description' => 'Un equipo de Operaciones Especiales llega a Venezuela y las informaciones de Jack los llevan hasta un complejo militar protegido. En el interior de la selva, las indagaciones de Jack ponen en peligro a todo el equipo. La rival del presidente Reyes, Gloria Bonalde, resulta ser una seria competidora para las elecciones.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '4',
            'title' => 'Vestida para matar',
            'rating' => '7.0',
            'description' => 'Relevado de su misión en Venezuela, Jack sigue una nueva pista hasta Londres y, tras pedir ayuda al MI5, descubre que el hombre al que sigue también le sigue a él. En Venezuela, Reyes le hace una oferta a Gloria.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '5',
            'title' => 'Oro azul',
            'rating' => '7.0',
            'description' => 'Jack y Harry convencen a Max de verse cara a cara, usando como cebo a su hija. Abandonado en la selva, Marcus se topa con un campamento de prisioneros. Greer va a ver a Gloria para intentar relacionar a Reyes con la desaparición de su marido.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '6',
            'title' => 'Persona non grata',
            'rating' => '8.5',
            'description' => 'Reyes acusa a los Estados Unidos de manipular las elecciones y se evacúa la embajada norteamericana. Jack, Greer y Mike November deben decidir si cumplir las órdenes o seguir por su cuenta. Los hombres de Reyes persiguen a Matice y a los soldados estadounidenses en la selva.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '7',
            'title' => 'Dios y Federación',
            'rating' => '6.0',
            'description' => 'Se adelantan las elecciones en Venezuela. Atrapados en un país hostil, Jack y Mike intentan sobrevivir mientras Greer es sometido a un interrogatorio. La familia Ubarri debe decidir si huir o enfrentarse a Reyes.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);

        DB::table('episodes')->insert([
            'season' => 'Temporada 2',
            'episode_number' => '8',
            'title' => 'Hombre fuerte',
            'rating' => '6.0',
            'description' => 'Jack acude al palacio presidencial para sacar a Greer. Al cierre de urnas, se producen protestas violentas a las puertas del palacio y Jack debe tomar una decisión que podría determinar su futuro.',
            'release_date' => '31 octubre 2019',
            'series_id' => '1',

        ]);
    }
}
