<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/movies.js" defer></script>
</head>

<body>

    <header class="bg-dark py-4">
        <div class="container">

            <!-- Ligne -->
            <div class="row">
                <!-- Titre du site -->
                <div class="col-6 col-lg-12 text-start text-lg-center">
                    <a href="#" title="Philosophy." class="text-white text-decoration-none h1 logo">
                        Movies
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="gradient"></div>
    <main>
        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">
                    <h1>Formulaire d'ajout de film</h1>

                    <form action="">

                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="titre">Titre</label>
                                        <input id="titre" type="text" name="titre" class="form-control" placeholder="Veuillez entrer votre titre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="director">Réalisateur</label>
                                        <input id="director" type="text" name="director" class="form-control" placeholder="Veuillez entrer le nom du réalisateur">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time">Durée</label>
                                        <input id="time" type="text" name="time" class="form-control" placeholder="Veuillez entrer la durée du film" value="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="text" name="date" class="form-control" id="form_date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Affiche</label>
                                        <input id="image" type="text" name="affiche" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer">Bande annonce</label>
                                        <input id="trailer" type="text" name="annonce" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="description">Description du film</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Text" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Valider">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Affiche</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Director</th>
                        <th scope="col">Détails</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>