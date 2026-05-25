 <div class="sidebar p-3">
    <h5 class="mb-4">Menu</h5>

    <nav class="nav flex-column">
      <a class="nav-link" href="../home/index.php"> Dashboard</a>
      <a class="nav-link" active href="edit.php">Product</a>
      <a class="nav-link " href="../product/edit.php">Add Products</a>
    </nav>
  </div>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <div class="topbar">
        <div>
            <h5>Home > Product > Add Product</h5>
        </div>

        <input type="text" class="form-control search-box" placeholder="Search anything">
    </div>

    <!-- CARD -->
    <div class="card card-custom p-4">

        <h5 class="mb-4">Product Information</h5>

        <div class="card card-custom p-4 mb-4">
            <h6 class="mb-3">General Information</h6>

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Product Name *</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Product Category *</label>
                    <select class="form-select">
                        <option>Select Product Category</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Product Price *</label>
                    <input type="text" class="form-control" placeholder="Enter Product Price">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Product Discount</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Set Product Discount">
                        <span class="input-group-text">%</span>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">Product Description *</label>
                    <textarea class="form-control" rows="4" placeholder="Enter Product Description"></textarea>
                </div>
            </div>
        </div>

        <!-- UPLOAD -->
        <div class="card card-custom p-4 mb-4">
            <h6 class="mb-3">Product Images</h6>

            <div class="upload-box">
                <p class="fw-bold">Drop files here or click to upload.</p>
                <small>(This is just a demo dropzone. Selected files are not actually uploaded.)</small>
            </div>
        </div>

        <!-- ACTIONS -->
        <div class="d-flex justify-content-end gap-2">
            <button class="btn btn-light">Cancel</button>
            <button class="btn btn-success">Add Product</button>
        </div>

    </div>

</div>