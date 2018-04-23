$(document).ready(function() {

  const runButton = $("#run-code-button");
  const newPagePreview = $("#new-page-preview-button");
  const resetButton = $("#reset-editors-button");
  const form = $("form");

// Display default code on window load.
  runButton.click(function () {
    form.attr("target", "iframe-result");
    form.submit();
  });

// Display result on a different page.
  newPagePreview.click(function () {
    form.attr("target", "_blank");
    form.submit();
  });

// Empty all editors' code space.
  resetButton.click(function () {
    $(".textarea-code").html("");
});

});
