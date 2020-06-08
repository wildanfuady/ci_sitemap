<?php 
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?= base_url() ?></loc>
    <lastmod><?= date('d-m-Y H:i:s') ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <?php foreach($post as $item) {?>
  <url>
    <loc><?= base_url('post/'.$item['post_slug']) ?></loc>
    <lastmod><?= $item['created_at'] ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <?php } ?>
</urlset>