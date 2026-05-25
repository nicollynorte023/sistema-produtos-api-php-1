 <div class="sidebar p-3">
    <h5 class="mb-4">Menu</h5>

    <nav class="nav flex-column">
      <a class="nav-link" href="index.php"> Dashboard</a>
      <a class="nav-link" active href="index.php">Product</a>
      <a class="nav-link " href="index.php">Add Products</a>
    </nav>
  </div>

<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">

        <!-- LEFT -->
        <div>HOME</div>

        <!-- RIGHT -->
        <div class="topbar-right">

            <div class="search-box">
                <input type="text" placeholder="Search anything">
                <span>🔍</span>
            </div>

        

        </div>

    </div>

    <!-- CARDS -->
    <div class="row g-3">

        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="card-icon">📊</div>
                <div class="ms-3">
                    <h4 class="text-danger">250k</h4>
                    <small>Sales</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="card-icon">😊</div>
                <div class="ms-3">
                    <h4 class="text-primary">24m</h4>
                    <small>Customers</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="card-icon">📦</div>
                <div class="ms-3">
                    <h4 class="text-warning">15k</h4>
                    <small>Products</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="card-icon">🛍️</div>
                <div class="ms-3">
                    <h4 class="text-success">180m</h4>
                    <small>Revenue</small>
                </div>
            </div>
        </div>

    </div>

    <!-- TABELA -->
    <div class="card mt-4">
    <div class="card-body">

        <h5>Orders</h5>

        <table class="table align-middle">

            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>User ID</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" width="40" class="rounded-circle">
                        Ellie Collins
                    </td>
                    <td>Ginger Snacks</td>
                    <td>Arise827</td>
                    <td>12/12/2021</td>
                    <td>$18</td>
                    <td class="text-success">✔ Paid</td>
                </tr>

                <tr>
                    <td>
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" width="40" class="rounded-circle">
                        Sophie Nguyen
                    </td>
                    <td>Guava Sorbet</td>
                    <td>Arise253</td>
                    <td>18/12/2021</td>
                    <td>$32</td>
                    <td class="text-danger">✖ Failed</td>
                </tr>

                <tr>
                    <td>
                        <img src="https://randomuser.me/api/portraits/men/12.jpg" width="40" class="rounded-circle">
                        Darcy Ryan
                    </td>
                    <td>Gooseberry</td>
                    <td>Arise878</td>
                    <td>22/12/2021</td>
                    <td>$19</td>
                    <td class="text-primary">⏳ Awaiting</td>
                </tr>

            </tbody>

        </table>

    </div>
    </div>

</div>
