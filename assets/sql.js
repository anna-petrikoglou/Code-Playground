window.onload = function () {

  const runButton = document.getElementById("run-code-button");
  const newPagePreview = document.getElementById("new-page-preview-button");
  const resetButton = document.getElementById("reset-editors-button");
  const form = document.getElementById("sqlform");
  const list = document.getElementsByClassName("textarea-code");
  const saveButton = $("#save-project-button");
  const mysql = document.getElementById("mysql");
  const restoreDBbutton = document.getElementById("restore-db-button");
  const userTableButton = document.getElementById("table-users-button");
  const groupTableButton = document.getElementById("table-groups-button");

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

  //Close notifications
  $('#close-notification').click(function() {
    $('#sql-playground-top-message').addClass('invisible');
  });
  $('#close-notification').hover(function() {
    $(this).css("cursor", "pointer");
  });
  $('#close-save-note').click(function() {
    $('#sql-playground-save-message').addClass('invisible');
  });
  $('#close-save-note').hover(function() {
    $(this).css("cursor", "pointer");
  });

  // Display table users
    $('#table-users-button').click(function() {
      //location.reload(true);
      $('#mysql').val('SELECT * FROM users;');
      $('#run-code-button').click();
    });

  // Display table groups
    $('#table-groups-button').click(function() {
      $('#mysql').val('SELECT * FROM groups;');
      $('#run-code-button').click();
    });

  // Restore Database
    $('#restore-db-button').click(function() {
      $.post('./playground/sql.php', {'restore-db-button':true}, function() {
        $('#mysql').val('SELECT * FROM users;');
        $('#run-code-button').click();
      });
    });

  saveButton.click(function () {
    // Assign handlers immediately after making the request,
    // and remember the jqxhr object for this request
    //{ html: $("#htmleditor textarea").val(), css: $("#csseditor textarea").val(), javascript: $("#jseditor textarea").val() }
    let jqxhr = $.post("system/save.php", $("#sqlform").serialize());

    jqxhr.done(function(data) {
      //alert("Project saved!");
      $('#sql-playground-save-message').removeClass('invisible');
      if ($('#project-id').val() !== $.trim(data)) {
      window.location.href = './sql.php?project_id=' + data;
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
