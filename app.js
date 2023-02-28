// creation table.
window.addEventListener("DOMContentLoaded", () => {


    //** select table */
    const table = document.querySelector('table');
    fetch("./fetchResultat.php",{
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: table
        })
    .then(response => {
        return response.json();
    })
    .then((data) => {


        // Selected the tbody
        const tbody = document.querySelector("tbody")

        for(let item of data){

            // creation tbody: <tr> , 3 * <td>, 
            let tr = document.createElement("tr");
            let td1 = document.createElement("td");
            let td2 = document.createElement("td");
            let td3 = document.createElement("td");

            // Assigning data to elements
            td1.textContent = item.date;
            td2.textContent = item.calcul;
            td3.textContent = item.result;
            if(td3.textContent === 'Faux'){
                td3.style.backgroundColor = '#ffaa9d';
            }else{
                td3.style.backgroundColor = '#b7f0ac';

            }

            // to tr then to tbody
            tr.append(td1, td2,td3);
            tbody.append(tr);

        }
    })
})
