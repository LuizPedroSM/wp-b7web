window.morePostsLoading = false;
function loadMorePosts() {
  if (window.morePostsLoading == false) {
    window.morePostsLoading = true;
    jQuery(".loadmoreButton").hide();
    let offset = jQuery("article.type-post").length;

    jQuery.ajax({
      type: "POST",
      url: ajaxUrl,
      data: { action: "loadMorePosts", offset: offset },
      success: function (html) {
        if (html != "") {
          jQuery(".loadmoreButton").show();
          jQuery(".postscontent").append(html);
          window.morePostsLoading = false;
        }
      }
    });
  }
}
jQuery(function () {
  jQuery(".loadmoreButton").on("click", loadMorePosts);
});
