<?php require_once 'header.inc.php';?>


                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head" style="text-align: center;">
                                <h3><u>Contact Us</u></h3>
                            </div>
                            <div class="module-body">
                                <table class="datatable-1 table table-bordered table-striped display" width="100%">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Query</th>
                                            <th>Date</th>
                                            <th colspan="1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="getCUFromDb">
                                    </tbody>
                                </table>
                            </div>

                        <!--For Delete a Query Record-->
                            <div id="CU_DelModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align:center;">Confirmation Box</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Are you sure you want to delete the Query?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" name="btn-CU-delete" id="btn-CU-delete" class="btn btn-success" value="Confirm">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="CU_delete_AckModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-sm">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align: center;">Message Box</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Query deleted Successfully</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--/#btn-controls-->
                            <div class="module">
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
                            </div>
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
