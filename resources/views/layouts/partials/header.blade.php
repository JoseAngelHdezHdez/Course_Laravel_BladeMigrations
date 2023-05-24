<header>
    <h1>Courses Angelo</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Courses</a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">About Us</a>
            </li>
            <li>
                <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contact Us</a>
            </li>
        </ul>
    </nav>
</header>
