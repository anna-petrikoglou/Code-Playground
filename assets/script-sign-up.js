window.onload = function(){

  const signUpFormPreview = document.getElementById("signupform");
  const homePage = document.getElementById("homepage");
  const signUpPage = document.getElementById("signuppage");
  if (signUpFormPreview) {
    homePage.toggleClass("active");
    signUpPage.classList.add("active");
  }

}
