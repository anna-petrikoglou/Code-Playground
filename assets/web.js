window.onload = function () {

autoRun();

  const runButton = document.getElementById("run-code-button");
  const newPagePreview = document.getElementById("new-page-preview-button");
  const resetButton = document.getElementById("reset-editors-button");
  const form = document.getElementById("webform");
  const list = document.getElementsByClassName("textarea-code");
  const saveButton = $("#save-project-button");

// Display default code on window load.
  runButton.onclick = function () {
    form.setAttribute("target", "iframe-result");
    form.submit();
  };

//Run code automatically every 5 seconds.
  function autoRun() {
      setInterval(function(){
        form.setAttribute("target", "iframe-result");
        form.submit();
    }, 5000);
  }

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

  //Close notifications
  $('#close-notification').click(function() {
    $('#web-playground-top-message').addClass('invisible');
  });
  $('#close-notification').hover(function() {
    $(this).css("cursor", "pointer");
  });
  $('#close-save-note').click(function() {
    $('#web-playground-save-message').addClass('invisible');
  });
  $('#close-save-note').hover(function() {
    $(this).css("cursor", "pointer");
  });

  saveButton.click(function () {
    // Assign handlers immediately after making the request,
    // and remember the jqxhr object for this request
    //{ html: $("#htmleditor textarea").val(), css: $("#csseditor textarea").val(), javascript: $("#jseditor textarea").val() }
    let jqxhr = $.post("system/save.php", $("#webform").serialize());

    jqxhr.done(function(data) {
      //alert("Project saved!");
      $('#web-playground-save-message').removeClass('invisible');
      if ($('#project-id').val() !== $.trim(data)) {
      window.location.href = './web.php?project_id=' + data;
      }
    })
    jqxhr.fail(function() {
      alert("Error occurred. Project not saved!");
    })
    jqxhr.always(function() {
      //alert("finished");
    });

  });

};
