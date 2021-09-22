<!-- Entête de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Lien du site -->
        <a class="navbar-brand" href="#">Mon Portfolio</a>

        <!-- Bouton de toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteneur des liens de la navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li v-for="page in pages" :key="page.id" :class="[ 'nav-item', { active: pageCourante === page.id }]" @click="pageCourante = page.id">
                    <a class="nav-link" aria-current="page" href="#">{{ page.nom }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Veilles
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Veille juridique</a></li>
                        <li><a class="dropdown-item" href="#">Veille technologique</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Veille personnelle</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
