<?php include '../partials/admin-header.php'; ?>

    <main class="p-2 px-4">
        <section id="report">
            <div class="content p-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="fw-bold mb-0">Inventory Report</h1>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-start mt-2 mt-md-0">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btn-sm border border-dark-subtle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Items per
                                page</button>
                            <ul class="dropdown-menu border border-dark-subtle" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">10 items per page</a></li>
                                <li><a class="dropdown-item" href="#">15 items per page</a></li>
                                <li><a class="dropdown-item" href="#">20 items per page</a></li>
                                <li><a class="dropdown-item" href="#">25 items per page</a></li>
                                <li><a class="dropdown-item" href="#">30 items per page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <form method="POST" action="">
                    <div class="row align-items-end">
                        <div class="col-4 col-md col-sm-3 col-xs-12">
                            <label for="brandSelect" class="form-label"></label>
                            <select class="form-select border border-dark-subtle" id="brandSelect" name="brand">
                                <option selected>Brand</option>
                                <option value="x">Brand X</option>
                            </select>
                        </div>
                        <div class="col-4 col-md col-sm-3 col-xs-12">
                            <label for="conditionSelect" class="form-label"></label>
                            <select class="form-select border border-dark-subtle" id="conditionSelect" name="condition">
                                <option selected>Condition</option>
                                <option value="a">A</option>
                            </select>
                        </div>
                        <div class="col-4 col-md col-sm-3 col-xs-12">
                            <label for="bagTypeSelect" class="form-label"></label>
                            <select class="form-select border border-dark-subtle" id="bagTypeSelect" name="bag_type">
                                <option selected>Bag Type</option>
                                <option value="handbag">Handbag</option>
                            </select>
                        </div>
                        <div class="col-4 col-md col-sm-3 col-xs-12">
                            <label for="colorSelect" class="form-label"></label>
                            <select class="form-select border border-dark-subtle" id="colorSelect" name="color">
                                <option selected>Color</option>
                                <option value="red">Red</option>
                            </select>
                        </div>
                        <div class="col-4 col-md col-sm-3 col-xs-12">
                            <label for="priceRangeSelect" class="form-label"></label>
                            <select class="form-select border border-dark-subtle" id="priceRangeSelect" name="price_range">
                                <option selected>Price Range</option>
                                <option value="0-50">₱0 - ₱50</option>
                                <option value="51-100">₱51 - ₱100</option>
                            </select>
                        </div>
                        <div class="col-4 col-md col-sm-3 col-xs-12">
                            <label for="statusSelect" class="form-label"></label>
                            <select class="form-select border border-dark-subtle" id="statusSelect" name="status">
                                <option selected>Status</option>
                                <option value="available">Available</option>
                                <option value="soldout">Sold Out</option>
                            </select>
                        </div>
                        <div class="col-12 col-md ms-auto">
                            <button type="submit" class="btn btn-dark fw-medium mt-3 mt-sm-3">Generate</button>
                        </div>
                    </div>
                </form>

                <!-- Same table format as inventory.php -->

            </div>
        </section>
    </main>

<?php include '../partials/admin-footer.php'; ?>