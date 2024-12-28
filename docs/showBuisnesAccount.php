<?php include_once('header.php') ?>
<div class="flex h-full">
  <?php include_once('sideBar.php') ?>

  <section id="accountsList" class="w-3/4">
    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-bold mb-4 text-gray-800">Liste des Comptes Bancaires</h2>
      <div class="w-full p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Customer Account Information</h2>
        <table class="min-w-full table-auto border-collapse border border-gray-200">
          <thead>
            <tr class="bg-blue-600 text-white">
              <th class="px-4 py-2 border-b">Customer ID</th>
              <th class="px-4 py-2 border-b">Name</th>
              <th class="px-4 py-2 border-b">Email</th>
              <th class="px-4 py-2 border-b">Balance</th>
              <th class="px-4 py-2 border-b">Credit Limit</th>
              <th class="px-4 py-2 border-b">Transaction Fee</th>
              <th class="px-4 py-2 border-b">Actions</th>
            </tr>
          </thead>
          <tbody id="tbody">
            
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<!-- component -->
<!-- Code block starts -->
<dh-component>
    <div id="popUp" class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <!-- Close Button -->
                <button class="absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="hidePopUp()" aria-label="close modal" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>

                <!-- Modal Content -->
              
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Edit Account</h1>
                <!-- Form Fields -->
                 <form action="./controller/eidtBuisnesAccount.php" method="POST">
                  <input type="hidden" id="customerId" name="id">
                <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Owner Name</label>
                <input id="name" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Name" required/>
                <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
                <input type="email" name="email" id="email" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Email" required/>
                <label for="Balance" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Balance</label>
                <input type="number" name="balance" id="Balance" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Balance" required />
                <label for="credit-limit" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Credit Limit</label>
                <input id="credit-limit" name="CriLi" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Enter Credit Limit" required />
                <label for="transaction-fee" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Transaction Fee</label>
                <input id="transaction-fee" name="TranFee" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Enter Transaction Fee"  required/>
                <div class="flex items-center justify-start w-full">
                    <button type="submit" name="save" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Submit</button>
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" type="button" onclick="hidePopUp()">Cancel</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    
    
</dh-component>
<!-- Code block ends -->


<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<script src="./businis.js"></script>
<?php include 'footer.php'  ?>
