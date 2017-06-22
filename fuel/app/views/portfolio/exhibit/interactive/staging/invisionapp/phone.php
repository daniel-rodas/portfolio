<article style="width: 100%; padding: 2em;">
    <h3  style="text-align: center"><?= $asset->name; ?></h3>
    <p style="text-align: center"><?= $asset->description; ?></p>
    <a class="btn btn-primary"
       style="display: block; margin: 0 auto; width: 16em; text-align: center"
       href="<?= $asset->url; ?>" target="_blank">Open prototype in new window</a>
</article>

<?= View::forge('portfolio/invision/iphone')->set('url', $asset->url) ?>

