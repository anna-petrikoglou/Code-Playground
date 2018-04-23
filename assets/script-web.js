window.onload = function() {

  const runButton = document.getElementById("run-code-button");
  const newPagePreview = document.getElementById("new-page-preview-button");
  const resetButton = document.getElementById("reset-editors-button");


// Display default code on window load.
  runButton.click();

// Display result on a different page.
// newPagePreview.onclick = newTab();

/*  function newTab() {
    const form = document.querySelector("form");
    form.setAttribute("target", "_blank");
  }
*/

  if ($_POST['action'] == 'here') {
      //action for here
      const form = document.querySelector("form");
      form.setAttribute("target", "iframe-result");
  } else if ($_POST['action'] == 'there') {
      //action for there
      const form = document.querySelector("form");
      form.setAttribute("target", "_blank");
  }


// Empty all editors' code space. - NOT WORKING -> RESET BUTTON INSTEAD
  resetButton.click(function() {
    const codeAreas = document.querySelectorAll(".textarea-code");
    codeAreas.innerHTML("");
  });

}
