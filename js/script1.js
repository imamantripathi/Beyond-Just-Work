 // Solution Section Script
 let individual = document.getElementById("individual");
 let medium = document.getElementById("medium");
 let pContent = document.getElementById("p-content");
 let link = document.getElementById("l-link");
 let solutionImg = document.getElementById("solution-img");
 let solutionImgM = document.getElementById("solution-imgM");


 individual.addEventListener("click", function () {
  individual.style.color="#2A86D1";
  medium.style.color="#000";
   pContent.innerHTML =
	 "Amenable memberships with business-ready offices that are best-suited to all budgets and all work strategies. Find a space to focus on your work and collaborate from an office-based environment in accordance to your timetable.";
   link.href = "#!";
   solutionImg.src = "images/solution_img.jpg";
   solutionImgM.src = "images/solution_img.jpg";

 });

 medium.addEventListener("click", function () {
  individual.style.color="#000";
  medium.style.color="#2A86D1";
   pContent.innerHTML =
	 "Take full advantage of the current prevailing hybrid strategy, elevate the concept of employee-centered work area and save on real estate and management costs through our solutions.";
   link.href = "#link21";
   solutionImg.src = "images/solution_img1.jpg";
   solutionImgM.src = "images/solution_img1.jpg";

 });