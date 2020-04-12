function toggleVisited(){
  var element = event.target;
  if (!element.classList.contains("visited")) {
    element.classList.add("visited");
  } else {
    element.classList.remove("visited");
  }
  console.log(element);
}

function findVisitedStates(values){
  for (var i = 0; i < values.length; i++) {
    if(!document.getElementById(values[i]).classList.contains("visited")){
      document.getElementById(values[i]).classList.add("visited");
    }
  }
}
