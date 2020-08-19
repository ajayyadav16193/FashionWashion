<?php require_once 'header.inc.php';?>


                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head" style="text-align: center;">
                                <h3><u>Categories</u></h3>
                            </div>
                            <div class="module-body">
                                <input type="button" name="add_cat" id="add_cat" class="btn btn-info" value="Add">
                                <div id="error_msg"></div>
                            </div>
                            <div class="module-body">
                                <table class="datatable-1 table table-bordered table-striped display" width="100%">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="getDataFromDb">
                                    </tbody>
                                </table>
                            </div>

                        <!-- Add Category Modal -->
                            <div id="cat_inModal" class="modal hide fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align:center; margin-top:10px;">Add New Category</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="formData" method="post">
                                                <label for="category">Enter Category : </label><br>
                                                <input type="text" name="cat_name" id="cat_name" required="">
                                                <div id="name_error"></div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" id="btn-add" name="btn-add" class="btn btn-success" value="Add">
                                            <input type="button" name="btn-add" class="btn btn-danger" data-dismiss="modal" value="Close">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="inModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align:center;">Acknowledgement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p style="color:green; text-align:center;">Category Inserted successfully</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <!-- Update Category Modal -->
                            <div id="cat_upModal" class="modal hide fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align:center; margin-top:10px;">Categories Form</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="formUpData" method="post">
                                                <label for="category">Category : </label><br>
                                                <input type="text" name="cat_upname" id="cat_upname" required="">
                                                <input type="hidden" name="cat_upid" id="cat_upid" required="">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" id="btn-update" name="btn-update" class="btn btn-success" value="Update">
                                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="upAckModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align:center;">Message Box</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p style="color:green; text-align:center;">Categories Updated successfully</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="cat_DelModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align:center;">Confirm Box</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Are you sure you want to delete the Category?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" name="btn-delete" id="btn-delete" class="btn btn-success" value="Confirm">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="deleteModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align: center;">Message Box</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Category deleted Successfully</p>
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
