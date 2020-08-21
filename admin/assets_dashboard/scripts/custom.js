    $(document).ready( () =>{
        $(".grapho").hide();
    // Categories Operations Start
        $("#add_cat").on("click", ()=>{
            $("#cat_inModal").modal("show");
        })

        $("#btn-add").on("click", ()=>{
            let formData = $("#formData").serialize();
                let url = "http://localhost/fashionwashion/admin/insert_cat.php";

                $.ajax({
                    type : 'POST',
                    url : url,
                    data : formData,
                    success : (data) => {
                        let result = JSON.parse(data);
                                                
                        if(result == "Category inserted successfully"){
                            $("#cat_inModal").modal("hide");
                            $("#inModal").modal("show");
                        }else{
                            $("#cat_inModal").modal("hide");
                        }
                    }
                })
                loadCategories();
        })
    // Categories Operations End

    // Products Operations Start
    $("#add_Product").on("click", ()=>{
            $("#prod_insModal").modal("show");
        })

        $("#btn-addProduct").on("click", ()=>{
            let formData = $("#produtFormData").serialize();
                let url = "http://localhost/fashionwashion/admin/insert_Prod.php";

                $.ajax({
                    type : 'POST',
                    url : url,
                    data : formData,
                    success : (data) => {
                        let result = JSON.parse(data);
                                                
                        if(result == "Category inserted successfully"){
                            $("#prod_insModal").modal("hide");
                            $("#prod_ins_ackModal").modal("show");
                        }else{
                            $("#prod_insModal").modal("hide");
                        }
                    }
                })
                loadProducts();
        })
    // Products Operations End

    })

    // Categories All functions
    function loadCategories() {
        output = " ";
        let url = "http://localhost/fashionwashion/admin/fetch_cat.php";
        
        $.ajax({
            type : 'GET',
            url : url,
            success : data => {
                
                let result = JSON.parse(data);
                
                let output = '';
                let sno = 0;

                result.forEach((row,i) => {
                    
                    output +=	
                        `<tr>
                            <td>${++sno}</td>
                            <td>${row.id}</td>
                            <td>${row.categories}</td>
                            ${row.status === '1' ? `<td><button class="btn btn-success" onclick="cat_status(${row.id},${row.status})">Active</button></td>` : `<td><button class="btn btn-warning" onclick="cat_status(${row.id},${row.status})">Deactive</button></td>`}                    
                            <td><button class="btn btn-primary" onclick='cat_edit("${row.id}")'>Edit</button></td>
                            <td><button class="btn btn-danger" onclick='cat_delete("${row.id}")'>Delete</button></td>  
                        </tr>`
                });					
                    $("#getDataFromDb").html(output);
            }				
        });
    }

    loadCategories();

    function cat_status(id,status) {

        let statusData = {
            cat_id : id,
            cat_status : status
        }

        let url = 'http://localhost/fashionwashion/admin/categoryStatus.php';

        $.ajax({
            type : 'POST',
            url : url,
            data : statusData,
            success : (sdata) => { }
        })

        loadCategories();

    }

    function cat_edit(id) {
        $("#cat_upModal").modal("show");
            let url = 'http://localhost/fashionwashion/admin/fetch_sin_cat.php';
            let updata = {
                id : id
            }
            $.ajax({
                type : 'GET',
                url : url,
                data : updata,
                success : udata => {
                    let result = JSON.parse(udata);
                    $("#cat_upid").val(result[0].id);
                    $("#cat_upname").val(result[0].categories);
                }
            })

        $("#btn-update").on("click", () => {
            let url = 'http://localhost/fashionwashion/admin/manage_cat.php';
            let upddata = $("#formUpData").serialize();

            $.ajax({
                type : 'POST',
                url : url,
                data : upddata,
                success : updata => {
                    let result = JSON.parse(updata);
                    console.log(result);
                    if( result.status == 'True'){
                        $("#cat_upModal").modal("hide");
                        $("#upAckModal").modal("show");
                    }else{
                        $("#cat_upModal").modal("show");
                    }
                }
            })
                loadCategories();
        })    
    }

    function cat_delete(id) {
        $('#cat_DelModal').modal("show");

        $('#btn-delete').on('click',function(){
            let data = {
                id : id
            }
            
            let url = 'http://localhost/fashionwashion/admin/delete_cat.php';
            
            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success : ddata => {
                    let result = JSON.parse(ddata);

                    if( result === "Record deleted Successfully"){
                        $('#cat_DelModal').modal("hide");
                        $('#deleteModal').modal("show");
                    }else{
                        $('#cat_DelModal').modal("show");
                    }
                }
            })
            loadCategories();
        });
    }

    // Products All functions
    function loadProducts() {
        output = " ";
        let url = "http://localhost/fashionwashion/admin/fetch_Prod.php";
        
        $.ajax({
            type : 'GET',
            url : url,
            success : data => {
                
                let result = JSON.parse(data);
                
                let output = '';
                let sno = 0;

                result.forEach((row,i) => {
                    
                    output +=	
                        `<tr>
                            <td>${++sno}</td>
                            <td>${row.id}</td>
                            <td>${row.categories}</td>
                            <td>${row.name}</td>
                            <td>${row.image}</td>
                            <td>${row.mrp}</td>
                            <td>${row.price}</td>
                            <td>${row.qty}</td>
                            
                            ${row.status === '1' ? `<td><button class="btn btn-success" onclick="prod_status(${row.id},${row.status})">Active</button></td>` : `<td><button class="btn btn-warning" onclick="prod_status(${row.id},${row.status})">Deactive</button></td>`}                    
                            <td><button class="btn btn-primary" onclick='prod_edit("${row.id}")'>Edit</button></td>
                            <td><button class="btn btn-danger" onclick='prod_delete("${row.id}")'>Delete</button></td>   
                        </tr>`				
                });					
                    $("#getProductFromDb").html(output);
            }				
        });
    }

    loadProducts();

    function prod_status(id,status) {

        let statusData = {
            prod_id : id,
            prod_status : status
        }

        let url = 'http://localhost/fashionwashion/admin/productStatus.php';

        $.ajax({
            type : 'POST',
            url : url,
            data : statusData,
            success : (pdata) => { }
        })

        loadProducts();
    }

    function prod_edit(id) {
        $("#prod_upModal").modal("show");
            let url = 'http://localhost/fashionwashion/admin/fetch_sin_prod.php';
            let updata = {
                id : id
            }
            $.ajax({
                type : 'GET',
                url : url,
                data : updata,
                success : udata => {
                    let result = JSON.parse(udata);

                    $("#prod_upid").val(result[0].id);
                    $("#prod_upname").val(result[0].prodegories);
                }
            })

        $("#btn-prod-update").on("click", () => {
            let url = 'http://localhost/fashionwashion/admin/manage_prod.php';
            let upddata = $("#formProdUpData").serialize();

            $.ajax({
                type : 'POST',
                url : url,
                data : upddata,
                success : updata => {
                    let result = JSON.parse(updata);

                    if( result.status == 'True'){
                        $("#btn-prod-update").modal("hide");
                        $("#prod_up_AckModal").modal("show");
                    }else{
                        $("#btn-prod-update").modal("show");
                    }
                }
            })
                loadProducts();
        })    
    }

    function prod_delete(id) {
        $('#prod_delModal').modal("show");

        $('#btn-prod-del').on('click',function(){
            let data = {
                id : id
            }
            
            let url = 'http://localhost/fashionwashion/admin/delete_prod.php';
            
            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success : ddata => {
                    let result = JSON.parse(ddata);

                    if( result === "Record deleted Successfully"){
                        $('#prod_delModal').modal("hide");
                        $('#prod_del_AckModal').modal("show");
                    }else{
                        $('#prod_delModal').modal("show");
                    }
                }
            })
            loadProducts();
        });
    }

    // Contact Us All functions
    function loadContactUs() {
        output = " ";
        let url = "http://localhost/fashionwashion/admin/CU_fetch.php";
        
        $.ajax({
            type : 'GET',
            url : url,
            success : data => {
                
                let result = JSON.parse(data);
                
                let output = '';
                let sno = 0;

                result.forEach((row,i) => {
                    
                    output +=	
                        `<tr>
                            <td>${++sno}</td>
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.email}</td>
                            <td>${row.mobile}</td>
                            <td>${row.comment}</td>
                            <td>${row.added_on}</td>                                                        
                            <td><button class="btn btn-danger" onclick='user_delete("${row.id}")'>Delete</button></td>   
                        </tr>`				
                });					
                    $("#getCUFromDb").html(output);
            }				
        });
    }

    loadContactUs();

    function user_delete(id) {
        $('#CU_DelModal').modal("show");

        $('#btn-CU-delete').on('click',function(){
            let data = {
                id : id
            }
            console.log(1);
            
            let url = 'http://localhost/fashionwashion/admin/CU_delete.php';
            
            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success : ddata => {
                    let result = JSON.parse(ddata);

                    if( result === "Record deleted Successfully"){
                        $('#CU_DelModal').modal("hide");
                        $('#CU_delete_AckModal').modal("show");
                    }else{
                        $('#CU_DelModal').modal("show");
                    }
                }
            })
            loadContactUs();
        });
    }

    // Users All functions
    function loadUsers() {
        output = " ";
        let url = "http://localhost/fashionwashion/admin/users_fetch.php";
        
        $.ajax({
            type : 'GET',
            url : url,
            success : data => {
                
                let result = JSON.parse(data);
                
                let output = '';
                let sno = 0;

                result.forEach((row,i) => {
                    
                    output +=	
                        `<tr>
                            <td>${++sno}</td>
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.email}</td>
                            <td>${row.mobile}</td>
                            <td>${row.added_on}</td>                                                        
                            <td><button class="btn btn-danger" onclick='user_delete("${row.id}")'>Delete</button></td>   
                        </tr>`				
                });					
                    $("#getUsersFromDb").html(output);
            }				
        });
    }

    loadUsers();

    function user_delete(id) {
        $('#users_DelModal').modal("show");

        $('#btn-users-delete').on('click',function(){
            let data = {
                id : id
            }
            
            let url = 'http://localhost/fashionwashion/admin/users_delete.php';
            
            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                success : ddata => {
                    let result = JSON.parse(ddata);

                    if( result === "Record deleted Successfully"){
                        $('#users_DelModal').modal("hide");
                        $('#users_delete_AckModal').modal("show");
                    }else{
                        $('#users_DelModal').modal("show");
                    }
                }
            })
            loadContactUs();
        });
    }