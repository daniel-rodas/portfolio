<div id="backToTop"></div>
<header id="header">
    <a id="brand" class="" href="/">
        <div class="sr-only">
            Daniel Rodas Design
        </div>
    </a>
    <group>
        <h1 class="page-title"><?= $this->renderSilent($pageTitle) ?></h1>
        <br />
        <h2 class="page-sub-title"><?= $this->renderSilent($pageSubTitle) ?></h2>
    </group>


    <rn-navigation>
        <nav class=" navigation">
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
                    <li role="presentation">
                        <a href="/">About</a>
                    </li>
                    <li role="presentation">
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    <li role="presentation">
                        <a href="/contact">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </rn-navigation>

</header>
