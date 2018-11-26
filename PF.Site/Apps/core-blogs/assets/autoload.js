var core_blogs_onchangeDeleteCategoryType = function (type) {
    if (type == 3)
        $('#category_select').show();
    else
        $('#category_select').hide();
};

var core_blogs_get_content = function (id) {
    var $editor = Editor.setId(id);
    Editor.getEditors();
    return $editor.getContent();
};

// todo remove after core 4.6.1
if (typeof $Core.editMeta === 'undefined') {
  $Core.editMeta = function(phrase, newTab) {
    var url = PF.url.make('admincp/language/phrase', {q: phrase});
    if (typeof newTab === 'boolean' && newTab) {
      window.open(url, '_blank');
    } else {
      window.open(url, '_self');
    }
  }
}