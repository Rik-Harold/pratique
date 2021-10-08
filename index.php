<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- Lien css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Lien vueJs -->
    <script src="https://unpkg.com/vue@next"></script>

    <!-- Mon style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="contenu">
        <!-- Entête de navigation -->
        <?php include_once('entete.php'); ?>

        <!-- Corps du site -->
        <keep-alive>
            <component :is="composantPageCourante"></component>
        </keep-alive>

        <!-- Pied de page -->
        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
    </div>

    <script>
        const vm = Vue.createApp({
            data()
            {
                return {
                    pageCourante: 'accueil',
                    pages: [
                        {id: 'accueil', nom: 'Accueil'},
                        {id: 'profil', nom: 'Profil'},
                        {id: 'doc', nom: 'Documentation'},
                        {id: 'situation', nom: 'Situation Professionnelle'},
                        // {id: 'cv', nom: 'Mon CV'},
                        // {id: 'competences', nom: 'Mes Compétences'}
                    ],
                    projet: 'ecole',
                    projets: [
                        {id: 'ecole', nom: 'Projets Ecole'},
                        {id: 'entreprise', nom: 'Projets Entreprise'}
                    ]
                }
            },
            computed: {
                composantPageCourante()
                {
                    // Récupération du composant du bouton cliqué
                    return 'page-' + this.pageCourante;
                }
            }
        });

        vm.component('page-accueil', {
            template: `
                <!-- Banière -->
                <div class="container-fluid baniere">
                    <h1 class="text-center">BTS SIO</h1>
                </div>
                <div class="container text-center p-3">
                    <h2 class="h2">Présentation du BTS SIO</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                    </p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3>OPTION SISR</h3>
                            <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                            </p>
                        </div>
                        <div class="col-6">
                            <h3>OPTION SISR</h3>
                            <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                            </p>
                        </div>
                    </div>
                </div>
            `
        });

        vm.component('page-profil', {
            template: `
                <!-- Banière -->
                <div class="container-fluid baniere">
                    <h1 class="text-center">PROFIL</h1>
                </div>
                <div class="container text-center p-3">
                    <h2 class="h2">Présentation personnelle</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                    </p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                    pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                    pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                                    pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `
        });

        vm.component('page-doc', {
            template: `
                <!-- Banière -->
                <div class="container-fluid text-center baniere">
                    <h1 class="text-center">DOCUMENTATION</h1>
                </div>
                <div class="container text-center p-3">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-outline btn-dark">PROJETS ECOLES</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-outline btn-dark">PROJETS ENTREPRISES</button>
                        </div>
                    </div>
                    <h2 class="h2">Documentation</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                    </p>
                </div>
            `
        });

        vm.component('page-ecole', {
            template: `
                <!-- Banière -->
                <div class="container-fluid text-center baniere">
                    <h1 class="text-center">PROJET ECOLE</h1>
                </div>
                <div class="container">
                    <div class="jumbotron">
                        <h2 class="h2">PetitS trucs</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                    </p>
                </div>
            `
        });

        vm.component('page-entreprise', {
            template: `
                <!-- Banière -->
                <div class="container-fluid text-center baniere">
                    <h1 class="text-center">PROJET ENTREPRISE</h1>
                </div>
                <div class="container text-center p-3">
                    <h2 class="h2">PROJETS D'ENTREPRISE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum assumenda ex illum consectetur provident consequuntur enim harum 
                        pariatur vel dolorum a nam odit dolore necessitatibus quis, rerum, at nihil. Deleniti.
                    </p>
                </div>
            `
        });

        vm.component('page-cv', {
            template: `
                <div class="container p-3 text-center">
                    <h3>DEVELOPPEUR WEB ET MOBILE</h3>
                    <div class="row flex">
                        <div class="col-sm-12">
                            <p>.<img src="mon-CV.png" alt="Curriculum Vitae" />.</p>
                        </div>
                    </div>
                    <p><b>Cliquer <a href="CV_Cédrik_DODDE_BTS_SIO_SLAM.pdf">ici</a> pour télécharger le CV.</b></p>
                </div>
                `
        });

        vm.component('page-situation', {
            template: `
                <!-- Banière -->
                <div class="container-fluid text-center baniere">
                    <h1 class="text-center">SITUATIONS PROFESSIONNELLES</h1>
                </div>
                <div class="container">

                    <div class="row text-center">
                        <div class="col-6">
                            <button class="btn btn-outline btn-dark">Tableau de Synthèse</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-outline btn-dark">Description des compétences</button>
                        </div>
                    </div>

                    <form class="d-flex m-4">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                        <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                    </form>


                    <div class="container p-4">
                        <div class="row flex mb-3">
                            <div class="col-8">
                                <div class="bg-secondary competences p-3">GIT</div>
                            </div>
                            <div class="col-4">
                                <a class="btn btn-secondary detail h-100 p-2" href="#">Détails</a>
                            </div>
                        </div>

                        <div class="row flex mb-3">
                            <div class="col-8">
                                <div class="bg-secondary competences p-3">CYBERSECURITE</div>
                            </div>
                            <div class="col-4">
                                <a class="btn btn-secondary detail h-100 p-2" href="#">Détails</a>
                            </div>
                        </div>

                        <div class="row flex mb-3">
                            <div class="col-8">
                                <div class="bg-secondary competences p-3">DEVELOPPEMENT ANDROID</div>
                            </div>
                            <div class="col-4">
                                <a class="btn btn-secondary detail h-100 p-2" href="#">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                `
        });

        vm.mount('#contenu');
    </script>

    <!-- Script js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>