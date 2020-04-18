function toggleVisited(){
  var element = event.target;
  console.log(element.id);
  if (!element.classList.contains("visited")) {
    element.classList.add("visited");
    document.getElementById("add_input_value").value = element.id;
    document.getElementById("add_state_input").submit();
  } else {
    element.classList.remove("visited");
    document.getElementById("delete_input_value").value = element.id;
    document.getElementById("delete_state_input").submit();
  }


}

function findVisitedStates(values){
  for (var i = 0; i < values.length; i++) {
    if(!document.getElementById(values[i]).classList.contains("visited")){
      document.getElementById(values[i]).classList.add("visited");
    }
  }
}
