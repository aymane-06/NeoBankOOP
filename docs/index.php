<?php include_once('header.php') ?>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <?php include_once('sideBar.php') ?>
    <!-- Main Content -->
    <main class="w-3/4 p-6 overflow-y-auto">
      <!-- Form Section -->
      <section id="createAccount" class="mb-12">
        <div class="bg-white shadow-md rounded-lg p-6">
          <h2 class="text-2xl font-bold mb-4 text-gray-800">Créer un Compte Bancaire</h2>
          <form id="accountForm" action="./controller/addAccountToDB.php" class="space-y-4" method="POST">
            <div>
              <label for="accountHolder" class="block text-gray-700 font-medium">Titulaire du Compte</label>
              <input type="text" id="accountHolder" name="accountHolder" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
              <label for="email" class="block text-gray-700 font-medium">Email</label>
              <input type="text" id="email" name="email" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
              <label for="initialBalance" class="block text-gray-700 font-medium">Solde Initial</label>
              <input type="number" id="initialBalance" name="initialBalance" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
              <label for="accountType" class="block text-gray-700 font-medium">Type de Compte</label>
              <select id="accountType" name="accountType" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
                <option value="" selected>Select Account Type</option>
                <option value="SavingsAccount">Compte Épargne</option>
                <option value="CurrentAccount">Compte Courant</option>
                <option value="BusinessAccount">Compte Entreprise</option>
              </select>
            </div>
            <div id="overdraft_limit" class="hidden">
              <label for="overdraft_limit" class="block text-gray-700 font-medium">Overdraft Limit</label>
              <input type="number"  name="overdraft_limit" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
              <label for="monthlyFee" class="block text-gray-700 font-medium">Monthly Fee</label>
              <input type="number"  name="monthlyFee" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div id="credit_limit" class="hidden">
              <label for="credit_limit" class="block text-gray-700 font-medium">Credit Limit</label>
              <input type="number"  name="credit_limit" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">

              <label for="transaction_fee" class="block text-gray-700 font-medium">Transaction Fee</label>
              <input type="number"  name="transaction_fee" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div id="interest_rate" class="hidden">
              <label for="interest_rate" class="block text-gray-700 font-medium">Interest Rate</label>
              <input type="number"  name="interest_rate" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">

              <label for="minimum_balance" class="block text-gray-700 font-medium">Minimum Balance</label>
              <input type="number"  name="minimum_balance" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit" 
              class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-blue-700" name="submit">
              Ajouter le Compte
            </button>
          </form>
        </div>
      </section>

      

      <script src="script.js"></script>

<?php include 'footer.php' ?>
