let acc=[];
let tbody=document.getElementById('tbody');
async function buisnisAcc(){
await fetch("./controller/showBuisnesAccount copy.php")
.then(res=>res.json())
.then(data=>{
    acc=data;
    // console.log(acc);
})
acc.forEach(a=>{
let tr=document.createElement('tr');
tr.classList.add('hover:bg-gray-100')
tr.innerHTML=` <td class="px-4 py-2 border-b">${a.customer_id}</td>
              <td class="px-4 py-2 border-b">${a._name}</td>
              <td class="px-4 py-2 border-b">${a.email}</td>
              <td class="px-4 py-2 border-b">$${a.balance}</td>
              <td class="px-4 py-2 border-b">$${a.credit_limit}</td>
              <td class="px-4 py-2 border-b">$${a.transaction_fee}</td>
              <td class="px-4 py-2 border-b">
                <button onclick="showPopUp(${a.customer_id})" id="editBtn" class="editBtn bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 mr-2">Edit</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
              </td>`

      tbody.appendChild(tr);        
})
}
buisnisAcc();

async function showPopUp(id){
    let cutomerData;
    let popUpModel=document.getElementById('popUp');
    popUpModel.classList.remove('hidden');    
   await fetch(`./controller/eidtBuisnesAccount.php?id=${id}`)
    .then(res=>res.json())
    .then(data=>{
        cutomerData=data;
        console.log(cutomerData);
    })
    let customerId=document.getElementById('customerId');
    let name=document.getElementById('name');
    let email=document.getElementById('email');
    let Balance=document.getElementById('Balance');
    let creditLimit=document.getElementById('credit-limit');
    let transactionFee=document.getElementById('transaction-fee');

    customerId.value=cutomerData[0].customer_id;
    name.value=cutomerData[0]._name;
    email.value=cutomerData[0].email;
    Balance.value=cutomerData[0].balance;
    Balance.value=cutomerData[0].balance;
    creditLimit.value=cutomerData[0].credit_limit;
    transactionFee.value=cutomerData[0].transaction_fee;




}

function hidePopUp(event){
    let popUpModel=document.getElementById('popUp');
    popUpModel.classList.add('hidden');   
}