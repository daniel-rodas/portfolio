<div class="navbar navbar-fixed-top" style="margin-right: 4px"  >
    <button type="button" style="padding-right:0; margin-right: 0"  class=" "><a href="/portfolio">Portfolio</a></button>

    <button type="button" style="padding:0px 10px; margin-right:4px;" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
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
            <?= \View::forge('portfolio/navigation'); ?>
        </ul>

    </div>
</div>

