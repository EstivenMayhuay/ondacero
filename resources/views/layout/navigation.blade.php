<div class="areaHiddenNav"></div>
<nav class="navigation">
    <div class="navigation__content">
        <p class="navigation__button"><i class='bx bx-x'></i></p>
        <ul class="menu">
            <li class="menu__item {{$activePage == "home" ? 'active' : ''}}">
                <a href="/" class="d-flex align-items-center">
                    <i class='bx bxs-home fs-3'></i>
                    <span class="mx-1">Inicio</span>
                </a>
            </li>
            <li class="menu__item {{$activePage == "noticias" ? 'active' : ''}}">
                <a href="/noticias" class="d-flex align-items-center">
                    <i class='bx bx-news fs-3'></i>
                    <span class="mx-1">Noticias</span>
                </a>
            </li>
            <li class="menu__item {{$activePage == "ranking" ? 'active' : ''}}">
                <a href="/musica/ranking" class="d-flex align-items-center">
                    <i class='bx bxs-bar-chart-alt-2 fs-3'></i>
                    <span class="mx-1">Ranking</span>
                </a>
            </li>
            <li class="menu__item">
                <a href="" class="d-flex align-items-center">
                    <i class='bx bx-radio fs-3'></i>
                    <span class="mx-1">Programas</span>
            </li>
            <li class="menu__item">
                <a href="" class="d-flex align-items-center">
                    <i class='bx bxs-music fs-3'></i>
                    <span class="mx-1">Música</span>
                </a>
            </li>
            <li class="menu__item">
                <a href="" class="d-flex align-items-center">
                    <i class='bx bx-gift fs-3'></i>
                    <span class="mx-1">Concursos</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
