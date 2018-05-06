window.onload = function() {

  const runButton = document.getElementById("run-code-button");
  const newPagePreview = document.getElementById("new-page-preview-button");
  const resetButton = document.getElementById("reset-editors-button");
  const form = document.querySelector("form");
  const list = document.getElementsByClassName("textarea-code");

// Display default code on window load.
  runButton.onclick = function () {
    form.setAttribute("target", "iframe-result");
    form.submit();
  };

// Display result on a different page.
  newPagePreview.onclick = function () {
    form.setAttribute("target", "_blank");
    form.submit();
  };

// Empty all editors' code space.
  resetButton.onclick = function () {
    for (i = 0; i < list.length; i++) {
      list[i].innerHTML = "";
    }
};

};
