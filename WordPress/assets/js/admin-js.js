jQuery(document).ready(function ($) {
  console.log("Готовкко");
  $("#main_post").autocomplete({
    source: ajaxurl + "?action=main_post_action",
    minLength: 2,
    delay: 500,
    select: function (event, ui) {
      $("#main_post_id").val(ui.item.id);
    },
  });
});
