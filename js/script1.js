 // Solution Section Script
 let individual = document.getElementById("individual");
 let medium = document.getElementById("medium");
 let pContent = document.getElementById("p-content");
 let link = document.getElementById("l-link");
 let solutionImg = document.getElementById("solution-img");

 individual.addEventListener("click", function () {
   pContent.innerHTML =
	 "Flexible memberships and turnkey offices that fit all budgets and hybrid strategies. Find space to focus and collaborate at hundreds of locations close to home or around the world. <br /><br /> We offer personalized solutions and support for individuals and small teams to help you achieve your goals and grow your business.";
   link.href = "#!";
   solutionImg.src = "images/solution_img.jpg";
 });

 medium.addEventListener("click", function () {
   pContent.innerHTML =
	 "Power your hybrid strategy, enhance employee experience and save on real estate costs by combining private office, coworking, and software solutions. <br> <br>";
   link.href = "#link21";
   solutionImg.src = "images/solution_img1.jpg";
 });