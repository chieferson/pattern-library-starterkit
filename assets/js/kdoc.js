//
// "KDOC" KIRBY CMS THEME FOR DOCUMENTATION
//
// @author    Nate Steiner
// @copyright Nate Steiner http://natesteiner.com
// @link      https://github.com/nsteiner/kdoc
//

Array.prototype.forEach.call(document.querySelectorAll('.sidebar-nav'), function(el, i){
  accordion(el);
});

hljs.initHighlightingOnLoad();
