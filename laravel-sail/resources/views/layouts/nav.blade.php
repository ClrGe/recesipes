<header>
    <div class="menu">
        <ul class="top-nav">
            <a href="#" class="logo"><img src="{{ asset('logo_cube_web_mobile.png') }}" alt="recesipes"></a>

            <li class="nav-item">
                <a href="{{ route('home') }}">🏠 Accueil</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('randomrecipe') }}">🥞 Recette au hasard</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories') }}">🍔 Catégories</a>
            </li>
            <li class="cart">
                <a href="#">🛒 Mon panier</a>
            </li>
            <li class="connect">
                <a href="{{ route('login') }}" class="active">🧁 S'identifier</a>
            </li>
        </ul>
    </div>
</header>

