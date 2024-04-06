

// Function to sort table data based on user selection
function sortTable(order) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[0];
            y = rows[i + 1].getElementsByTagName("TD")[0];
            //check if the two rows should switch place:
            if (order === 'asc') {
                if (Number(x.innerHTML) > Number(y.innerHTML)) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            } else if (order === 'desc') {
                if (Number(x.innerHTML) < Number(y.innerHTML)) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
}

// Add event listener to dropdown box
document.getElementById("sortOrder").addEventListener("change", function() {
    var sortOrder = this.value;
    sortTable(sortOrder);
});



function zoomIn() {
    var container = document.getElementById("container");
    var currentWidth = parseInt(container.style.width);
    var currentHeight = parseInt(container.style.height);
    container.style.width = (currentWidth + 100) + "px";
    container.style.height = (currentHeight + 100) + "px";
}

// Function to zoom out
function zoomOut() {
    var container = document.getElementById("container");
    var currentWidth = parseInt(container.style.width);
    var currentHeight = parseInt(container.style.height);
    container.style.width = (currentWidth - 100) + "px";
    container.style.height = (currentHeight - 100) + "px";
}
