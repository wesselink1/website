<?

kirbytext::$tags['wikipedia'] = array(
  'html' => function($tag) {
    return '<a href="https://en.wikipedia.org/wiki/'.$tag->attr('wikipedia').'">'.$tag->page()->currentTitle().' railway station on Wikipedia</a>';
  }
);
