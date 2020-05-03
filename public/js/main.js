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

function showStateName(){
  var element = event.target;
  var infobox = document.getElementById('info-box');
  infobox.textContent = element.childNodes[1].innerHTML;
  infobox.setAttribute("style", "display: block;");
  infobox.setAttribute("style", "background: white;");
  infobox.setAttribute("style", "border: 1px solid gray;");
  infobox.setAttribute("style", "transform: translateY("+(event.clientY-250)+"px) translateX("+(event.clientX)+"px);");
}

function hideStateName(){
  var element = event.target;
  var infobox = document.getElementById('info-box');
  infobox.textContent = "";
  infobox.setAttribute("style", "display: none;");
  infobox.setAttribute("style", "transform: translateY("+(event.clientY-250)+"px) translateX("+(event.clinetX)+"px);");
}

function findVisitedStates(values){
  for (var i = 0; i < values.length; i++) {
    if(!document.getElementById(values[i]).classList.contains("visited")){
      document.getElementById(values[i]).classList.add("visited");
    }
  }
}
