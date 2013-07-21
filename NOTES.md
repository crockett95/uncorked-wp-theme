Notes
===

## Specs

_Categorize these better later_

### On inital page request

#### It should render the page in PHP/HTML from index.php

The first page should always load the full document, so that whether or not JS is enabled, the page is rendered correctly.

#### It should serve the permalinks structure JSON

This is needed to set up the Backbone.js router. *Not needed except for implementation of IndexedDB*

#### It should only render the permalinks JSON on the first page request

It would be a real pain in the ass if this had to render/load every time a non-JS user clicks to a new page. Try to keep this from happening. Also, it's not needed for AJAX requests. Using `add_action( 'generate_rewrite_rules' )` and checking for file existance on first load then rendering out to a `permalinks.js` file which can be enqueued.

#### It should initalize Backbone.js application

This is fairly obvious if I want the entire client-side to run on Backbone.js when JS is enabled. Obviously, it would do no good if it's not enabled anyway

#### It should load JQuery and Underscore libraries

These are necessary.

#### It should degrade gracefully

I want this to function properly in the absence of any number of functions down to pure HTML without CSS, JS, or Images.

_NB: I will not attempt to support IE version quirks beyond what is already written into incorporated libraries and submodules (e.g. HTML5 will be used, and HTML5shiv will be included, but IE legacy browsers without JS are fucked.)_

#### It should start to cache posts and pages content to IndexedDB with a Web Worker

Using a Web Worker, we can send an AJAX request to the server to get all post/page content and store it locally in IndexedDB, then check there first for content, drastically reducing load times.



### General

#### It should use the same links regardless of AJAX/JS support

The permalink should always be the permalink. That's why I'm putting so much issue into parsing and loading the permalink structure.

#### It should load custom post types correctly

This is big. I don't want to lock the site in to only using only the standard post-types and taxonomies. A good custom site should be able to support custom post types.

#### It should be well-developed, well-documented, and well-commented

What good is it if no one can figure out what I wrote after I wrote it?

#### It should provide modularity such that it can easily be customized

I want this project to be useful for making client sites.

## Contents of `$wp_rewrite`

_NB: unneeded parts have been removed_

    object(WP_Rewrite)#177 (24) { 
      ["permalink_structure"]=> string(12) "/%postname%/" 
      ["use_trailing_slashes"]=> bool(true) 
      ["author_base"]=> string(6) "author" 
      ["search_base"]=> string(6) "search" 
      ["pagination_base"]=> string(4) "page" 
      ["front"]=> string(1) "/" 
      ["root"]=> string(0) "" 
      ["index"]=> string(9) "index.php" 
      ["matches"]=> string(0) "" 
      ["rules"]=> array(160) { 
        ["album/?$"]=> string(25) "index.php?post_type=album" 
        ["album/page/([0-9]{1,})/?$"]=> string(43) "index.php?post_type=album&paged=$matches[1]" 
        ["track/?$"]=> string(25) "index.php?post_type=track" 
        ["track/page/([0-9]{1,})/?$"]=> string(43) "index.php?post_type=track&paged=$matches[1]" 
        ["album-credits/?$"]=> string(33) "index.php?post_type=album-credits" 
        ["album-credits/page/([0-9]{1,})/?$"]=> string(51) "index.php?post_type=album-credits&paged=$matches[1]" 
        ["wp-types-group/[^/]+/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["wp-types-group/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["wp-types-group/([^/]+)/page/?([0-9]{1,})/?$"]=> string(54) "index.php?wp-types-group=$matches[1]&paged=$matches[2]" 
        ["wp-types-group/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(54) "index.php?wp-types-group=$matches[1]&cpage=$matches[2]" 
        ["wp-types-group/([^/]+)(/[0-9]+)?/?$"]=> string(53) "index.php?wp-types-group=$matches[1]&page=$matches[2]" 
        ["wp-types-group/[^/]+/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["wp-types-group/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["wp-types-user-group/[^/]+/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["wp-types-user-group/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["wp-types-user-group/([^/]+)/page/?([0-9]{1,})/?$"]=> string(59) "index.php?wp-types-user-group=$matches[1]&paged=$matches[2]" 
        ["wp-types-user-group/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(59) "index.php?wp-types-user-group=$matches[1]&cpage=$matches[2]" 
        ["wp-types-user-group/([^/]+)(/[0-9]+)?/?$"]=> string(58) "index.php?wp-types-user-group=$matches[1]&page=$matches[2]" 
        ["wp-types-user-group/[^/]+/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["wp-types-user-group/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["album/[^/]+/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["album/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["album/([^/]+)/page/?([0-9]{1,})/?$"]=> string(45) "index.php?album=$matches[1]&paged=$matches[2]" 
        ["album/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(45) "index.php?album=$matches[1]&cpage=$matches[2]" 
        ["album/([^/]+)(/[0-9]+)?/?$"]=> string(44) "index.php?album=$matches[1]&page=$matches[2]" 
        ["album/[^/]+/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["album/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["track/[^/]+/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["track/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["track/([^/]+)/page/?([0-9]{1,})/?$"]=> string(45) "index.php?track=$matches[1]&paged=$matches[2]" 
        ["track/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(45) "index.php?track=$matches[1]&cpage=$matches[2]" 
        ["track/([^/]+)(/[0-9]+)?/?$"]=> string(44) "index.php?track=$matches[1]&page=$matches[2]" 
        ["track/[^/]+/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["track/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["album-credits/[^/]+/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["album-credits/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["album-credits/([^/]+)/page/?([0-9]{1,})/?$"]=> string(53) "index.php?album-credits=$matches[1]&paged=$matches[2]" 
        ["album-credits/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(53) "index.php?album-credits=$matches[1]&cpage=$matches[2]" 
        ["album-credits/([^/]+)(/[0-9]+)?/?$"]=> string(52) "index.php?album-credits=$matches[1]&page=$matches[2]" 
        ["album-credits/[^/]+/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["album-credits/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["category/(.+?)/page/?([0-9]{1,})/?$"]=> string(53) "index.php?category_name=$matches[1]&paged=$matches[2]" 
        ["category/(.+?)/?$"]=> string(35) "index.php?category_name=$matches[1]" 
        ["tag/([^/]+)/page/?([0-9]{1,})/?$"]=> string(43) "index.php?tag=$matches[1]&paged=$matches[2]" 
        ["tag/([^/]+)/?$"]=> string(25) "index.php?tag=$matches[1]" 
        ["type/([^/]+)/page/?([0-9]{1,})/?$"]=> string(51) "index.php?post_format=$matches[1]&paged=$matches[2]" 
        ["type/([^/]+)/?$"]=> string(33) "index.php?post_format=$matches[1]" 
        [".*wp-app\.php(/.*)?$"]=> string(19) "index.php?error=403" 
        [".*wp-register.php$"]=> string(23) "index.php?register=true" 
        ["page/?([0-9]{1,})/?$"]=> string(28) "index.php?&paged=$matches[1]" 
        ["comments/page/?([0-9]{1,})/?$"]=> string(28) "index.php?&paged=$matches[1]" 
        ["search/(.+)/page/?([0-9]{1,})/?$"]=> string(41) "index.php?s=$matches[1]&paged=$matches[2]" 
        ["search/(.+)/?$"]=> string(23) "index.php?s=$matches[1]" 
        ["author/([^/]+)/page/?([0-9]{1,})/?$"]=> string(51) "index.php?author_name=$matches[1]&paged=$matches[2]" 
        ["author/([^/]+)/?$"]=> string(33) "index.php?author_name=$matches[1]" 
        ["([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$"]=> string(81) "index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]" 
        ["([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$"]=> string(63) "index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]" 
        ["([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$"]=> string(65) "index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]" 
        ["([0-9]{4})/([0-9]{1,2})/?$"]=> string(47) "index.php?year=$matches[1]&monthnum=$matches[2]" 
        ["([0-9]{4})/page/?([0-9]{1,})/?$"]=> string(44) "index.php?year=$matches[1]&paged=$matches[2]" 
        ["([0-9]{4})/?$"]=> string(26) "index.php?year=$matches[1]" 
        [".?.+?/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        [".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["(.?.+?)/page/?([0-9]{1,})/?$"]=> string(48) "index.php?pagename=$matches[1]&paged=$matches[2]" 
        ["(.?.+?)/comment-page-([0-9]{1,})/?$"]=> string(48) "index.php?pagename=$matches[1]&cpage=$matches[2]" 
        ["(.?.+?)(/[0-9]+)?/?$"]=> string(47) "index.php?pagename=$matches[1]&page=$matches[2]" 
        ["[^/]+/attachment/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
        ["([^/]+)/page/?([0-9]{1,})/?$"]=> string(44) "index.php?name=$matches[1]&paged=$matches[2]" 
        ["([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(44) "index.php?name=$matches[1]&cpage=$matches[2]" 
        ["([^/]+)(/[0-9]+)?/?$"]=> string(43) "index.php?name=$matches[1]&page=$matches[2]" 
        ["[^/]+/([^/]+)/?$"]=> string(32) "index.php?attachment=$matches[1]" 
        ["[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$"]=> string(50) "index.php?attachment=$matches[1]&cpage=$matches[2]" 
      } 
      ["extra_permastructs"]=> array(6) { 
        ["album"]=> array(8) { 
          ["with_front"]=> bool(true) 
          ["ep_mask"]=> int(1) 
          ["paged"]=> bool(true) 
          ["forcomments"]=> bool(false) 
          ["walk_dirs"]=> bool(true) 
          ["endpoints"]=> bool(true) 
          ["struct"]=> string(14) "/album/%album%" 
        } 
        ["track"]=> array(8) { 
          ["with_front"]=> bool(true) 
          ["ep_mask"]=> int(1) ["paged"]=> bool(true) 
          ["walk_dirs"]=> bool(true) 
          ["endpoints"]=> bool(true) 
          ["struct"]=> string(14) "/track/%track%" 
        } 
        ["album-credits"]=> array(8) { 
          ["with_front"]=> bool(true) 
          ["ep_mask"]=> int(1) 
          ["paged"]=> bool(true) 
          ["forcomments"]=> bool(false) 
          ["walk_dirs"]=> bool(true) 
          ["endpoints"]=> bool(true) 
          ["struct"]=> string(30) "/album-credits/%album-credits%" 
        } 
        ["category"]=> array(8) { 
          ["with_front"]=> bool(true) 
          ["ep_mask"]=> int(512) 
          ["paged"]=> bool(true) 
          ["forcomments"]=> bool(false) 
          ["walk_dirs"]=> bool(true) 
          ["endpoints"]=> bool(true) 
          ["struct"]=> string(20) "/category/%category%" 
        } 
        ["post_tag"]=> array(8) { 
          ["with_front"]=> bool(true) 
          ["ep_mask"]=> int(1024) 
          ["paged"]=> bool(true) 
          ["forcomments"]=> bool(false) 
          ["walk_dirs"]=> bool(true) 
          ["endpoints"]=> bool(true) 
          ["struct"]=> string(15) "/tag/%post_tag%" 
        } 
        ["post_format"]=> array(8) { 
          ["with_front"]=> bool(true) 
          ["ep_mask"]=> int(0) 
          ["paged"]=> bool(true) 
          ["forcomments"]=> bool(false) 
          ["walk_dirs"]=> bool(true) 
          ["endpoints"]=> bool(true) 
          ["struct"]=> string(19) "/type/%post_format%" 
        } 
      } 
      ["rewritecode"]=> array(17) { 
        [0]=> string(6) "%year%" 
        [1]=> string(10) "%monthnum%" 
        [2]=> string(5) "%day%" 
        [3]=> string(6) "%hour%" 
        [4]=> string(8) "%minute%" 
        [5]=> string(8) "%second%" 
        [6]=> string(10) "%postname%" 
        [7]=> string(9) "%post_id%" 
        [8]=> string(8) "%author%" 
        [9]=> string(10) "%pagename%" 
        [10]=> string(8) "%search%" 
        [11]=> string(7) "%album%" 
        [12]=> string(7) "%track%" 
        [13]=> string(15) "%album-credits%" 
        [14]=> string(10) "%category%" 
        [15]=> string(10) "%post_tag%" 
        [16]=> string(13) "%post_format%" 
      } 
      ["queryreplace"]=> array(17) { 
        [0]=> string(5) "year=" 
        [1]=> string(9) "monthnum=" 
        [2]=> string(4) "day=" 
        [3]=> string(5) "hour=" 
        [4]=> string(7) "minute=" 
        [5]=> string(7) "second=" 
        [6]=> string(5) "name=" 
        [7]=> string(2) "p=" 
        [8]=> string(12) "author_name=" 
        [9]=> string(9) "pagename=" 
        [10]=> string(2) "s=" 
        [11]=> string(6) "album=" 
        [12]=> string(6) "track=" 
        [13]=> string(14) "album-credits=" 
        [14]=> string(14) "category_name=" 
        [15]=> string(4) "tag=" 
        [16]=> string(12) "post_format=" 
      } 
    }

## TODO: list

  TODO Test1

