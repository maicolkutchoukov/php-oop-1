<?php
    class Movie
    {
        public $title;
        public $original_language;
        public $time;
        public $producer;
        public $country;
        public $genres = array();
        function __construct(string $title, string $original_language, string $time, string $producer, string $country, array $genres)
            {
                $this->title = $title;
                $this->original_language = $original_language;
                $this->time = $time;
                $this->producer = $producer;
                $this->country = $country;
                $this->genres = $genres;
            }
            public function get_details()
            {
                $genres_list = '';
                foreach ($this->genres as $genre) {
                    $genres_list .= $genre . ' ';
                }
                return 'Titolo: ' . $this->title . ', ' . 'Lingua originale: ' . $this->original_language . ', ' . 'Durata: ' . $this->time . ', ' . 'Regista: ' . $this->producer . ', ' . 'Paese di origine: ' . $this->country . ', ' . 'Generi: ' . $genres_list;
            }
            public function set_genre($genre)
            {
                $this->genres[] = $genre;
            }
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP OOP 1</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <?php
                $theWolfOfWallStreet_genres = array('Biografico', 'Commedia', 'Drammatico');
                $theWolfOfWallStreet = new Movie('The Wolf of Wall Street ', 'English', '2h 14m', 'Martin Scorsese', 'USA', $theWolfOfWallStreet_genres);
                echo $theWolfOfWallStreet->get_details();
                ?>
                <br>
                <?php
                $watcher_genres = array('Giallo', 'Horror', 'Thriller');
                $watcher = new Movie('Watcher', 'English', '1h 36m', 'Chloe Okuno', 'USA', $watcher_genres);
                echo $watcher->get_details();
                ?>
            </div>
        </main>
        <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>
</html>