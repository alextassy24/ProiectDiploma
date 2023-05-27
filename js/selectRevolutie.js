function populate(tip, rugozitate, gauraSemifabricat) {
    var tip = document.getElementById('tip');
    var rugozitate = document.getElementById('rugozitate');
    var gauraSemifabricat = document.getElementById('gauraSemifabricat');
    rugozitate.innerHTML = "";
    if (tip.value == "Cilindrică exterioară") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4", "0.2|0.2"];
    } else if (tip.value == "Cilindrică interioară") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8"];
    } else if (tip.value == "Plană circulară plină") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4", "0.2|0.2"];
    } else if (tip.value == "Plană circulară întreruptă") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4", "0.2|0.2"];
    } else if (tip.value == "Plană frontală non-circulară") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8"];
    } else if (tip.value == "Toroidală") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4", "0.2|0.2"];
    } else if (tip.value == "Conică") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4", "0.2|0.2"];
    } else if (tip.value == "Canal exterior") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8"];
    } else if (tip.value == "Canal de pană") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8"];
    } else if (tip.value == "Canelată") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4", "0.2|0.2", "0.1|0.1"];
    } else if (tip.value == "Gaură netedă") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8", "0.4|0.4"];
    } else if (tip.value == "Gaură filetată") {
        var optionArray = ["50|50", "25|25", "12.5|12.5", "6.3|6.3", "3.2|3.2", "1.6|1.6", "0.8|0.8"];
    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        rugozitate.options.add(newOption);
    }
    if (tip.value == "Cilindrică interioară" || tip.value == "Gaură netedă" || tip.value == "Gaură filetată") {
        gauraSemifabricat.style.display = "block";
        gauraSemifabricat.style.visibility = "visible";
    } else {
        gauraSemifabricat.style.display = "none";
        gauraSemifabricat.style.visibility = "hidden";
    }
}