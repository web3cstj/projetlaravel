<div id="templatemo_menu" class="ddsmoothmenu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="{{action('UserController@index')}}">Liste des usagers</a>
            <ul>
                <li><a href="{{action('UserController@create')}}">Ajouter un usager</a></li>
                <li><a href="#submenu2">Sub menu 2</a></li>
                <li><a href="#submenu3">Sub menu 3</a></li>
                <span></span>
            </ul>
        </li>
        <li><a href="{{action('PostController@index')}}">Liste des articles</a>
            <ul>
                <li><a href="{{action('PostController@create')}}">Ajouter un article</a></li>
                <li><a href="#submenu2">Sub menu 2</a></li>
                <li><a href="#submenu3">Sub menu 3</a></li>
                <li><a href="#submenu4">Sub menu 4</a></li>
                <li><a href="#submenu5">Sub menu 5</a></li>
                <span></span>
            </ul>
        </li>
        <li><a href="blog.html" class="selected">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
    <br style="clear: left" />
</div> <!-- end of menu -->
