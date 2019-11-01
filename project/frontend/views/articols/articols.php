<div class="site-index">
<div class="jumbotron">
    <h1> This is title for page</h1>
</div>
    <div class="row">
        <?foreach ($articols as arc):?>
        <div class="col-lg-4">
            <h2><?=$arc->title?></h2>

        </div>
        <?endForeach?>
    </div>
</div>
