<!-- Navigation -->
<nav class="top-menu-container">
    <div class="logo-header">
        <a href="">
            <img 
            src="{{ URL('storage/laravel-logo.png') }}" 
            alt="Logo personal portfolio"
            title="Logo personal portfolio"
            />
        </a>
        <a href="">
            <img 
            src="{{ URL('storage/arvin-logo.png') }}" 
            alt="Logo personal portfolio"
            title="Logo personal portfolio"
            />
        </a>
    </div>

    <ul>
        <li>
            <a href="/" class={{ request()->is('/') ? 'active' : ''}}>Home</a>
        </li>
        <li>
            <a href="/cars" class={{ request()->is('cars/*') ? 'active' : '' }}>Cars</a>
        </li>
        <li>
            <a href="about" class={{ request()->is('about/*') ? 'active' : '' }}>About</a>
        </li>
        <li>
            <a href="portfolio">Portfolio</a>
        </li>
        <li>
            <a href="contact">Contact</a>
        </li>
    </ul>
</nav>