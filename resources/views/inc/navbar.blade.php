<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Application Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item {{ (request()->is('posts*')) ? 'active' : '' }}">
                <a class="nav-link" href="/posts">Blog</a>
            </li>
            <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                <a class="nav-link" href="/about">A propos</a>
            </li>
            <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
