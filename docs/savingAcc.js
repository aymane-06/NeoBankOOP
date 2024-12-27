let acc=[];
let tbody=document.getElementById('tbody');
async function buisnisAcc(){
await fetch("./controller/showSavingAccount.php")
.then(res=>res.json())
.then(data=>{
    acc=data;
    console.log(acc);
})
acc.forEach(a=>{
let tr=document.createElement('tr');
tr.classList.add('hover:bg-gray-100')
tr.innerHTML=` <td class="px-4 py-2 border-b">${a.customer_id}</td>
              <td class="px-4 py-2 border-b">${a._name}</td>
              <td class="px-4 py-2 border-b">${a.email}</td>
              <td class="px-4 py-2 border-b">$${a.balance}</td>
              <td class="px-4 py-2 border-b">${a.interest_rate}%</td>
              <td class="px-4 py-2 border-b">$${a.minimum_balance}</td>
              <td class="px-4 py-2 border-b">
                <button class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 mr-2">Edit</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
              </td>`

      tbody.appendChild(tr);        
})
}
buisnisAcc();