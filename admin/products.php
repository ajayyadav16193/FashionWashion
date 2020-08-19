<?php require_once 'header.inc.php';?>


            <!--/.span3-->
            <div class="span9">
                <div class="content">
                    <div class="module">
                        <div class="module-head" style="text-align: center;">
                            <h3><u>Products</u></h3>
                        </div>
                        <div class="module-body">
                            <input type="button" name="add_Product" id="add_Product" class="btn btn-info" value="Add">
                            <div id="error_msg"></div>
                        </div>
                        <div class="module-body">
                            <table class="datatable-1 table table-bordered table-striped display" width="100%">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Id</th>
                                        <th>Cat Name</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>MRP</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="getProductFromDb">
                                </tbody>
                            </table>
                        </div>

                    <!-- Add Product Modal -->
                        <div id="prod_insModal" class="modal hide fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align:center; margin-top:10px;">Add New Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="produtFormData" method="post" enctype="multipart/form-data">
                                            <label for="Product">Enter Product : </label><br>
                                            <input type="text" name="prod_name" id="prod_name" required="">
                                            <div id="name_error"></div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" id="btn-addProduct" name="btn-addProduct" class="btn btn-success" value="Add">
                                        <input type="button" name="btn-add" class="btn btn-danger" data-dismiss="modal" value="Close">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="prod_ins_ackModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align:center;">Acknowledgement</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p style="color:green; text-align:center;">Product Inserted successfully</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <!-- Update Product Modal -->
                        <div id="prod_upModal" class="modal hide fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align:center; margin-top:10px;">Product Form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formProdUpData" method="post">
                                            <input type="hidden" name="prod_upid" id="prod_upid" required="">
                                            <label for="product">Product : </label><br>
                                            <input type="text" name="prod_upname" id="prod_upname" required="">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" id="btn-prod-update" name="btn-prod-update" class="btn btn-success" value="Update">
                                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="prod_up_AckModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align:center;">Message Box</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p style="color:green; text-align:center;">Product Updated successfully</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="prod_delModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align:center;">Confirm Box</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center">Are you sure you want to delete the Product?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" name="btn-prod-del" id="btn-prod-del" class="btn btn-success" value="Confirm">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="prod_del_AckModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align: center;">Message Box</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center">Product deleted Successfully</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--/#btn-controls-->
                        <!-- <div class="module">
                            <div class="module-head">
                                <h3>
                                    Profit Chart</h3>
                            </div>
                            <div class="module-body">
                                <div class="chart inline-legend grid">
                                    <div id="placeholder2" class="graph" style="height: 500px">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.wrapper-->

<?php require_once 'footer.inc.php'; ?>
