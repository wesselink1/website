<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/masthead');

  pattern('page/content', [
    'p' => $page
  ]);

  pattern('section/featured', [
    'title' => 'Section <abbr aria-label="1">I</abbr>: London and its Environs',
    'url' => '/stations/section:1',
    'items' => page('stations')->children()->filterBy('section', '1')->filter(function($page) {
      return $page->hasImages();
    })->limit(3)
  ]);

  pattern('section/featured', [
    'title' => 'Section <abbr aria-label="2">II</abbr>: North & South Wales, Ireland and the Lakes of Killarney',
    'url' => '/stations/section:2',
    'items' => page('stations')->children()->filterBy('section', '2')->filter(function($page) {
      return $page->hasImages();
    })->limit(3)
  ]);

  pattern('section/featured', [
    'title' => 'Section <abbr aria-label="3">III</abbr>: The English and Scotch Lake Districts and Ayr',
    'noresult' => 'Coming soon'
  ]);

  pattern('section/featured', [
    'title' => 'Section <abbr aria-label="4">IV</abbr>: The great manufacturing districts of Lancashire & Yorkshire',
    'noresult' => 'Coming soon'
  ]);
?>
</article>

<? snippet('foot') ?>