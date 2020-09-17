<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Acasa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordonatori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Adaugare</a>
                        <a href="/ordonatori" class="dropdown-item">Vizualizare</a>
                        <a class="dropdown-item" href="#">Radiere</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Institutii Publice
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Adaugare</a>
                        <a href="/institutii" class="dropdown-item">Vizualizare</a>
                        <a class="dropdown-item" href="#">Radiere</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Angajati
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Militari</a>
                        <a class="dropdown-item" href="#">Politisti</a>
                        <a class="dropdown-item" href="#">Medici</a>
                        <a class="dropdown-item" href="#">Personal Contractual</a>
                        <a class="dropdown-item" href="#">Functionari publici</a>
                    </div>
                </li>
            </ul>
            <div>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Acces</button>
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Solicitare Acces</button>
            </div>

        </div>
    </nav>
</template>

<script>
    export default {
        
    }
</script>
