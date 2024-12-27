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
        <th class="px-4 py-2 border-b">Overdraft Limit</th>
        <th class="px-4 py-2 border-b">Monthly Fee</th>
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
    </main>
  </div>

  </div>
<script src="./current.js"></script>
<?php include('./footer.php') ?>  