<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'title' => 'Jack Ryan',
            'network' => 'Amazon',
            'description' => 'Cuando el analista de la CIA, Jack Ryan, se tropieza con una serie de transferencias bancarias sospechosas, su búsqueda de respuestas lo saca de la seguridad de su escritorio y lo catapulta hacia un juego mortal del gato y el ratón por toda Europa y Oriente Medio, donde se encuentra a un terrorista que prepara un ataque masivo contra Estados Unidos y sus aliados.',
            'categorie' => 'Acción, aventura, drama',
            'rating' => '7.4',
            'creator' => 'Graham Roland y Carlton Cuse',
            'original_title' => "Tom Clancy's Jack Ryan",
            'original_language' => 'Inglés',
            'status' => 'En emisión',
            'first_air_date' => '30 agosto 2018',
            'last_air_date' => '31 octubre 2019',
            'img' => 'https://image.tmdb.org/t/p/w1280/1raUrQr8Y2tSYjTDbk8wfWGKTmX.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'La sucesión',
            'network' => 'HBO',
            'description' => 'La serie gira en torno a la vida de la familia Redstone. Son multimillonarios y poderosos, tienen todo lo que ansían, salvo vida familiar. Son dueños de una de la compañías de comunicaciones más exitosas del mundo. Su objetivo principal es hacer que el imperio crezca y, para ello, las lealtades se pondrán en juego.',
            'categorie' => 'Drama',
            'rating' => '7.5',
            'creator' => 'Jesse Armstrong',
            'original_title' => "Succession",
            'original_language' => 'Inglés',
            'status' => 'En emisión',
            'first_air_date' => '3 junio 2018',
            'last_air_date' => '13 octubre 2019',
            'img' => 'https://image.tmdb.org/t/p/w1280/vyYObGGEc0QHe3cRasBCp9O2zdJ.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'La chica del tambor',
            'network' => 'BBC One, AMC',
            'description' => 'El joven y brillante actriz Charlie se relaciona con un extraño intrigante mientras está de vacaciones en Grecia, pero rápidamente se hace evidente que sus intenciones están lejos de ser románticas.',
            'categorie' => 'Drama, política',
            'rating' => '7.2',
            'creator' => 'Park Chan-wook',
            'original_title' => "The Little Drummer Girl",
            'original_language' => 'Inglés',
            'status' => 'En emisión',
            'first_air_date' => '28 octubre 2018',
            'last_air_date' => '16 diciembre 2018',
            'img' => 'https://image.tmdb.org/t/p/w1280/yNIp2Z9JhRpA26BFthXxjQb8X7q.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Friday Night Lights',
            'network' => 'NBC',
            'description' => 'Los habitantes de una pequeña ciudad tejana viven el deporte como si fuera una religión. Para ellos no hay nada más importante que los Dillon Panthers, el equipo de fútbol americano del instituto de la ciudad. Adaptación de la película homónima dirigida en 2004 por Peter Berg.',
            'categorie' => 'Drama',
            'rating' => '8.0',
            'creator' => 'Peter Berg y Brian Grazer',
            'original_title' => "Friday Night Lights",
            'original_language' => 'Inglés',
            'status' => 'Finalizada',
            'first_air_date' => '3 octubre 2006',
            'last_air_date' => '9 febrero 2011',
            'img' => 'https://image.tmdb.org/t/p/w1280/Eu7MzZY1DldJ683z7vLkILHNRD.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Así nos ven',
            'network' => 'Netflix',
            'description' => 'Miniserie de TV de cuatro capítulos basada en una historia real que sacudió a la opinión pública estadounidense. Cuenta el caso de Los Cinco de Central Park (Antron McCray, Kevin Richardson, Yusef Salaam, Raymond Santana y Korey Wise), unos adolescentes afroamericanos condenados por una violación que no cometieron. La crónica, que abarca 25 años, comienza en la primavera de 1989, con el primer interrogatorio de los jóvenes de Harlem.',
            'categorie' => 'Drama',
            'rating' => '8.7',
            'creator' => 'Ava DuVernay',
            'original_title' => "When They See Us",
            'original_language' => 'Inglés',
            'status' => 'Finalizada',
            'first_air_date' => '31 mayo 2019',
            'last_air_date' => '31 mayo 2019',
            'img' => 'https://image.tmdb.org/t/p/w1280/8shLGVN1w4DiYuEc5i0X39dn6RA.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Silicon Valley',
            'network' => 'HBO',
            'description' => 'En la fiebre del oro de alta tecnología moderna de Silicon Valley, las personas más calificadas para tener éxito son los menos capaces de manejar el éxito. Parcialmente inspirada en las propias experiencias de Mike Judge como ingeniero de Silicon Valley a finales de los años 80, Silicon Valley es una comedia de situación estadounidense que se centra en torno a seis programadores que están viviendo juntos y tratando de hacer algo grande en el Silicon Valley.',
            'categorie' => 'Comedia',
            'rating' => '8.0',
            'creator' => 'Mike Judge, Alec Berg, Dave Krinsky y John Altschuler',
            'original_title' => "Silicon Valley",
            'original_language' => 'Inglés',
            'status' => 'En emisión',
            'first_air_date' => '6 abril 2014',
            'last_air_date' => '1 diciembre 2019',
            'img' => 'https://image.tmdb.org/t/p/w1280/dc5r71XI1gD4YwIUoEYCLiVvtss.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Perdidos',
            'network' => 'ABC',
            'description' => 'Historia de un variopinto grupo de supervivientes de un accidente de aviación en una isla del Pacífico aparentemente desierta, una isla en la que suceden cosas muy extrañas. Luchando por la supervivencia, casi medio centenar de personas mostrarán lo mejor y lo peor de sí mismas.',
            'categorie' => 'Acción, drama, misterio',
            'rating' => '7.8',
            'creator' => 'J.J. Abrams, Damon Lindelof,  y Jeffrey Lieber',
            'original_title' => "Lost",
            'original_language' => 'Inglés',
            'status' => 'Finalizada',
            'first_air_date' => '22 septiembre 2004',
            'last_air_date' => '23 mayo 2010',
            'img' => 'https://image.tmdb.org/t/p/w1280/yhS5dwYwqiMYQ6C6tO8uDaNjC1Z.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Peaky Blinders',
            'network' => 'BBC One, BBC Two',
            'description' => 'La serie está ambientada en el mundo de los gangsters de los años 20, en Birmingham. Un joven a lomos de un hermoso corcel negro recorre las calles de Birmingham (Inglaterra). Estamos en 1919, la Gran Guerra ha terminado, pero aquel individuo posee el don de atemorizar a su paso a cualquier transeúnte. ¿Quién es? ¿Por qué les asusta tanto? Al parecer busca un hechizo, una pócima, que garantice la victoria de su caballo de carreras. Una mujer oriental proveerá al temido muchacho de una mágica especia que hará que el noble animal equino logre su fin.',
            'categorie' => 'Drama, crimen',
            'rating' => '8.3',
            'creator' => 'Steven Knight',
            'original_title' => "Peaky Blinders",
            'original_language' => 'Inglés',
            'status' => 'En emisión',
            'first_air_date' => '12 septiembre 2013',
            'last_air_date' => '22 septiembre 2019',
            'img' => 'https://image.tmdb.org/t/p/w1280/AiqsuFFL2u4hsrMFYUbQlX9BqhH.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Suits',
            'network' => 'USA Network',
            'description' => 'Michael Ross se gana la vida sobre la delgada línea de la legalidad. Es un joven con una inteligencia abrumadora, pero las malas compañías con las que se junta en la universidad le hicieron salirse y buscar una opción más vistosa a corto plazo, mejorar su economía. Entre sus triquiñuelas destaca el número de veces que se presenta en nombre de otros a los exámenes de corte de derecho. El azar le acabará situando en el despacho de uno de los abogados más jóvenes y brillantes de Manhattan, Harvey Specter. La inteligencia y dotes de Michael le asombrarán tanto que le tomará como su pupilo, a pesar de que no tenga la licenciatura. Juntos trabajarán mano a mano, ocultándole al resto del mundo la verdad: que juntos sólo suman un sólo título universitario.',
            'categorie' => 'Drama',
            'rating' => '7.5',
            'creator' => 'Aaron Korsh',
            'original_title' => "Suits",
            'original_language' => 'Inglés',
            'status' => 'Finalizada',
            'first_air_date' => '23 junio 2011',
            'last_air_date' => '25 septiembre 2019',
            'img' => 'https://image.tmdb.org/t/p/w1280/qLvk8UedfimUyiTvH9QWpr04byW.jpg',

        ]);

        DB::table('series')->insert([
            'title' => 'Prison Break',
            'network' => 'FOX',
            'description' => 'Prison Break, también conocida como Prison break, en busca de la verdad en Hispanoamérica, fue una serie de televisión dramática estadounidense que estrenó la cadena norteamericana Fox el 29 de agosto de 2005 y terminó el 24 de mayo de 2009 en su cuarta temporada (los dos episodios finales fueron editados directamente al DVD en EE. UU. el 21 de julio, pero el 24 de mayo fueron estrenados por una televisión israelí). La trama de la serie gira en torno a un hombre sentenciado a la pena de muerte y el elaborado plan de su hermano para salvarlo de la misma. Fue creada por Paul Scheuring y producida por Adelstein-Parouse Productions en asociación con Original Television y 20th Century Fox Television. La originalidad y la calidad de la serie la ha hecho merecedora de nominaciones a distintos premios como los Emmy y los Globo de Oro.',
            'categorie' => 'Acción, drama, crimen',
            'rating' => '7.6',
            'creator' => 'Paul Scheuring',
            'original_title' => "Prison Break",
            'original_language' => 'Inglés',
            'status' => 'Finalizada',
            'first_air_date' => '29 agosto 2005',
            'last_air_date' => '30 mayo 2017',
            'img' => 'https://image.tmdb.org/t/p/w1280/5E1BhkCgjLBlqx557Z5yzcN0i88.jpg',

        ]);
    }
}
