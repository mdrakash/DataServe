require('./bootstrap');

console.log("run");
const channels = Echo.channel('dataserving');
channels.subscribed(()=>{
    console.log("sub");
}).listen('DataServeEvent',(e)=>{
        console.log(e.data);
        let table =document.getElementById("show_all_data");
        let tableRow = table.insertRow(-1);
        let cellID = tableRow.insertCell(-1);
        let cellName = tableRow.insertCell(-1);
        let cellPhone = tableRow.insertCell(-1);
        let cellEmail = tableRow.insertCell(-1);
        cellID.innerHTML = e.data.id;
        cellName.innerHTML = e.data.name;
        cellPhone.innerHTML = e.data.phone;
        cellEmail.innerHTML = e.data.email;
})