<?php
// KIRBY SEARCH PLUGIN STYLING
//
// @link: https://getkirby.com/docs/cookbook/search

return function($site, $pages, $page) {

  $query   = get('q');
  $results = $site->index()->visible()->search($query, 'title|overview|description');

  return array(
    'query'   => $query,
    'results' => $results,
  );

};
