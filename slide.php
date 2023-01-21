<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>S</title>
<link rel="stylesheet" type="text/css" href="slcss.css">
</head>
<body>
<div class="cd-projects-container">
   <ul class="cd-projects-previews">
      <li>
         <a href="#0">
            <div class="cd-project-title">
               <h2>Project 1</h2>
               <p>Brief description of the project here</p>
            </div>
         </a>
      </li>

      <li>
         <!-- project preview here -->
      </li>

      <!-- other project previews here -->
   </ul> <!-- .cd-projects-previews -->

   <ul class="cd-projects">
      <li>
         <div class="preview-image">
            <div class="cd-project-title">
               <h2>Project 1</h2>
               <p>Brief description of the project here</p>
            </div> 
         </div>

         <div class="cd-project-info">
            <!-- project description here -->
         </div> <!-- .cd-project-info -->
      </li>

      <!-- projects here -->
   </ul> <!-- .cd-projects -->

   <button class="scroll cd-text-replace">Scroll</button>
</div> <!-- .cd-project-container -->
</body>
</html>

<nav class="cd-primary-nav" id="primary-nav">
   <ul>
      <li class="cd-label">Navigation</li>
      <li><a href="#0">The team</a></li>
      <!-- navigation items here -->
   </ul>
   function slideToggleProjects(projectsPreviewWrapper, projectIndex, index, bool) {
   var randomProjectIndex = makeUniqueRandom();
  
   if( index < numRandoms - 1 ) {
      projectsPreviewWrapper.eq(randomProjectIndex).toggleClass('slide-out', bool);
      setTimeout( function(){
         //animate next preview project
         slideToggleProjects(projectsPreviewWrapper, projectIndex, index + 1, bool);
      }, 150);
   } else {
      //this is the last project preview to be animated 
      projectsPreviewWrapper.eq(randomProjectIndex).toggleClass('slide-out', bool).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
         // ...
         animating = false;
      });
   }
}
</nav> <!-- .cd-primary-nav -->