<nav class="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a [ngClass]="{active: captureUriSegment( '' )}" href="/">About</a></li>
            <li><a [ngClass]="{active: captureUriSegment( 'portfolio' )}" href="/portfolio">Portfolio</a></li>
            <li><a [ngClass]="{active: captureUriSegment( 'contact' )}" href="/contact">Contact</a></li>
        </ul>

    </div>
</nav>
